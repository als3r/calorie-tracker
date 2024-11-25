<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.11.5/main.min.css' rel='stylesheet' />
        <link href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.11.5/main.min.css' rel='stylesheet' />
        <style>
            .fc-day-today {
                background-color: rgba(59, 130, 246, 0.1) !important;
            }
            .fc-daygrid-day.fc-day-past {
                background-color: transparent;
            }
            .fc-daygrid-day.fc-day-future {
                background-color: rgba(0, 0, 0, 0.025);
            }
            .dark .fc-daygrid-day.fc-day-future {
                background-color: rgba(255, 255, 255, 0.025);
            }
            .fc-daygrid-day-number {
                font-size: 0.875rem;
                padding: 0.5rem !important;
            }
            .fc-day-summary {
                font-size: 0.75rem;
                line-height: 1rem;
                padding: 0.25rem;
            }
            .fc-day-summary-row {
                display: flex;
                justify-content: space-between;
                padding: 0.125rem 0;
            }
            .dark .fc-theme-standard td, 
            .dark .fc-theme-standard th,
            .dark .fc-theme-standard .fc-scrollgrid {
                border-color: rgb(55 65 81);
            }
            .dark .fc-col-header-cell-cushion,
            .dark .fc-daygrid-day-number {
                color: rgb(209 213 219);
            }
        </style>
    @endpush

    @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.11.5/main.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.11.5/main.min.js'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    initialDate: '{{ now()->format("Y-m-d") }}',
                    validRange: {
                        start: '{{ $startDate->format("Y-m-d") }}',
                        end: '{{ $endDate->format("Y-m-d") }}'
                    },
                    headerToolbar: {
                        left: '',
                        center: 'title',
                        right: ''
                    },
                    firstDay: 1,
                    height: 'auto',
                    dayCellContent: function(info) {
                        return { html: '<div class="fc-daygrid-day-number">' + info.dayNumberText + '</div>' };
                    },
                    dayCellDidMount: function(info) {
                        const date = info.date.toISOString().split('T')[0];
                        const summary = @json($dailySummaries);
                        
                        if (summary[date]) {
                            const data = summary[date];
                            const content = document.createElement('div');
                            content.className = 'fc-day-summary';
                            content.innerHTML = `
                                <div class="fc-day-summary-row">
                                    <span>Calories:</span>
                                    <span class="font-medium">${Math.round(data.total_calories)}</span>
                                </div>
                                <div class="fc-day-summary-row">
                                    <span>Protein:</span>
                                    <span class="font-medium">${data.total_protein.toFixed(1)}g</span>
                                </div>
                                <div class="fc-day-summary-row">
                                    <span>Fat:</span>
                                    <span class="font-medium">${data.total_fat.toFixed(1)}g</span>
                                </div>
                                <div class="fc-day-summary-row">
                                    <span>Carbs:</span>
                                    <span class="font-medium">${data.total_carb.toFixed(1)}g</span>
                                </div>
                                <div class="text-center text-gray-500 dark:text-gray-400 mt-1">
                                    ${data.meals_count} meal${data.meals_count !== 1 ? 's' : ''}
                                </div>
                            `;
                            info.el.querySelector('.fc-daygrid-day-events').appendChild(content);
                        } else if (info.date < new Date()) {
                            const content = document.createElement('div');
                            content.className = 'fc-day-summary text-center text-gray-400 dark:text-gray-500 mt-4';
                            content.textContent = 'No meals recorded';
                            info.el.querySelector('.fc-daygrid-day-events').appendChild(content);
                        }
                    }
                });
                calendar.render();
            });
        </script>
    @endpush
</x-app-layout>
