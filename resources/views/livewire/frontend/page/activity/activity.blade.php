@vite('resources/css/frontend/calendario.css')
<div style="">
    <livewire:frontend.partials.header>

        <div class="container">
            <!-- Controles de navegación -->
            <div class="navigation">
                <button id="prev-month" class="btn">Mes Anterior</button>
                <span id="current-month" class="current-month"></span>
                <button id="next-month" class="btn">Mes Siguiente</button>
            </div>

            <!-- Contenedor del calendario -->
            <div class="container-calendar">
                <div id="calendar" class="calendar" data-activities='@json($activities)'></div>
            </div>
        </div>

        <script>
            const activitiesData = @json($activities);
        </script>

        @vite('resources/js/frontend/calendar.js')
</div>
