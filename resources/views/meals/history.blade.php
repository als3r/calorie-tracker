<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meal History') }}
        </h2>
    </x-slot>

    @push('styles')
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
        <style>
            .fc-daygrid-day-frame {
                min-height: 120px !important;
            }
            .fc-daygrid-day-number {
                font-size: 0.875rem !important;
            }
            .fc-day-today {
                background-color: rgba(96, 165, 250, 0.1) !important;
            }
            .fc-day-past {
                background-color: rgba(243, 244, 246, 0.1) !important;
            }
            .fc-day-future {
                background-color: rgba(243, 244, 246, 0.05) !important;
            }
            .meal-summary {
                font-size: 0.75rem;
                margin-top: 0.25rem;
            }
            .meal-summary-item {
                display: flex;
                justify-content: space-between;
                margin-bottom: 0.25rem;
            }
            .meal-count {
                text-align: center;
                font-size: 0.75rem;
                color: #6B7280;
                margin-top: 0.5rem;
            }
            .no-meals {
                text-align: center;
                font-size: 0.75rem;
                color: #9CA3AF;
                margin-top: 1rem;
            }
        </style>
    @endpush

    @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const calendarEl = document.getElementById('calendar');
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    firstDay: 1, // Start week on Monday
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth'
                    },
                    height: 'auto',
                    events: @json($events),
                    dayCellDidMount: function(info) {
                        const date = info.date;
                        const dateKey = date.toISOString().split('T')[0];
                        const summary = @json($dailySummaries)[dateKey];
                        
                        if (summary) {
                            const content = `
                                <div class="meal-summary">
                                    <div class="meal-summary-item">
                                        <span>Calories:</span>
                                        <span class="font-medium">${summary.total_calories.toLocaleString()}</span>
                                    </div>
                                    <div class="meal-summary-item">
                                        <span>Protein:</span>
                                        <span class="font-medium">${summary.total_protein.toFixed(1)}g</span>
                                    </div>
                                    <div class="meal-summary-item">
                                        <span>Fat:</span>
                                        <span class="font-medium">${summary.total_fat.toFixed(1)}g</span>
                                    </div>
                                    <div class="meal-summary-item">
                                        <span>Carbs:</span>
                                        <span class="font-medium">${summary.total_carb.toFixed(1)}g</span>
                                    </div>
                                    <div class="meal-count">
                                        ${summary.meals_count} meal${summary.meals_count !== 1 ? 's' : ''}
                                    </div>
                                </div>
                            `;
                            info.el.querySelector('.fc-daygrid-day-frame').insertAdjacentHTML('beforeend', content);
                        } else if (date < new Date()) {
                            info.el.querySelector('.fc-daygrid-day-frame').insertAdjacentHTML('beforeend', `
                                <div class="no-meals">No meals recorded</div>
                            `);
                        }
                    }
                });
                calendar.render();
            });
        </script>
    @endpush

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
