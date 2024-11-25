<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\MealType;
use App\Models\UserMealTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MealTemplateController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $templates = Auth::user()->mealTemplates()
            ->with(['mealType', 'foodItems'])
            ->orderBy('name')
            ->get();

        return view('meal-templates.index', compact('templates'));
    }

    public function create()
    {
        $mealTypes = MealType::orderBy('name')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        
        return view('meal-templates.form', compact('mealTypes', 'foodItems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'meal_type_id' => 'required|exists:meal_types,id',
            'description' => 'nullable|string',
            'time' => 'required|date_format:H:i',
            'food_items' => 'required|array|min:1',
            'food_items.*.id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $template = new UserMealTemplate($validated);
        $template->user_id = Auth::id();
        $template->save();
        
        // Attach food items
        foreach ($request->food_items as $item) {
            $template->foodItems()->attach($item['id'], [
                'quantity' => $item['quantity'],
                'unit' => 'g'
            ]);
        }

        // Calculate nutritional totals
        $template->load('foodItems');
        $template->calculateNutritionalTotals();

        return redirect()->route('meal-templates.index')
            ->with('success', 'Meal template created successfully!');
    }

    public function edit(UserMealTemplate $mealTemplate)
    {
        $this->authorize('update', $mealTemplate);
        
        $mealTypes = MealType::orderBy('name')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        
        return view('meal-templates.form', compact('mealTemplate', 'mealTypes', 'foodItems'));
    }

    public function update(Request $request, UserMealTemplate $mealTemplate)
    {
        $this->authorize('update', $mealTemplate);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'meal_type_id' => 'required|exists:meal_types,id',
            'description' => 'nullable|string',
            'time' => 'required|date_format:H:i',
            'food_items' => 'required|array|min:1',
            'food_items.*.id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $mealTemplate->fill($validated);
        $mealTemplate->save();
        
        // Sync food items
        $mealTemplate->foodItems()->sync(
            collect($request->food_items)->mapWithKeys(function ($item) {
                return [$item['id'] => ['quantity' => $item['quantity'], 'unit' => 'g']];
            })
        );

        // Calculate nutritional totals
        $mealTemplate->load('foodItems');
        $mealTemplate->calculateNutritionalTotals();

        return redirect()->route('meal-templates.index')
            ->with('success', 'Meal template updated successfully!');
    }

    public function destroy(UserMealTemplate $mealTemplate)
    {
        $this->authorize('delete', $mealTemplate);
        
        $mealTemplate->delete();

        return redirect()->route('meal-templates.index')
            ->with('success', 'Meal template deleted successfully!');
    }

    public function createMeal(Request $request, UserMealTemplate $mealTemplate)
    {
        $this->authorize('view', $mealTemplate);
        
        $validated = $request->validate([
            'date' => 'required|date_format:Y-m-d',
        ]);

        $meal = $mealTemplate->createMeal($validated['date']);

        return redirect()->route('meals.edit', $meal)
            ->with('success', 'Meal created from template successfully!');
    }

    /**
     * Get template data for use in meal form.
     */
    public function getData(UserMealTemplate $template)
    {
        try {
            \Log::info('Template access attempt', [
                'template_id' => $template->id,
                'template_user_id' => $template->user_id,
                'current_user_id' => auth()->id()
            ]);

            $this->authorize('view', $template);

            $template->load(['mealType', 'foodItems']);

            \Log::info('Template data loaded', [
                'food_items' => $template->foodItems->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'quantity' => $item->pivot->quantity,
                    ];
                })
            ]);

            return response()->json([
                'meal_type_id' => $template->meal_type_id,
                'food_items' => $template->foodItems->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'quantity' => $item->pivot->quantity,
                    ];
                }),
            ]);
        } catch (\Illuminate\Auth\Access\AuthorizationException $e) {
            \Log::warning('Template access denied', [
                'template_id' => $template->id,
                'template_user_id' => $template->user_id,
                'current_user_id' => auth()->id(),
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'error' => 'You are not authorized to access this template',
                'details' => [
                    'template_id' => $template->id,
                    'template_user_id' => $template->user_id,
                    'current_user_id' => auth()->id()
                ]
            ], 403);
        } catch (\Exception $e) {
            \Log::error('Template access error', [
                'template_id' => $template->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'An error occurred while loading the template'], 500);
        }
    }

    /**
     * Get template data for AJAX requests.
     */
    public function getTemplateData(UserMealTemplate $template)
    {
        $this->authorize('view', $template);

        return response()->json($template->load('mealType', 'foodItems'));
    }
}
