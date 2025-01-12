<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Lista de Actividades</h1>

    <div class="mb-4 flex flex-col md:flex-row gap-4">
    <div class="flex-1">
        <input 
            wire:model.live="search" 
            type="text" 
            placeholder="Buscar por nombre..."
            class="input"
        >
    </div>
    <div class="flex-1">
        <select 
            wire:model.live="yearFilter"
            class="select"
        >
            <option value="">Todos los años</option>
            @for ($year = date('Y'); $year >= 2025; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>
    </div>
</div>

    @if($activities->isEmpty())
        <div class="text-gray-500">No hay actividades disponibles.</div>
    @else
    
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($activities as $activity)
                <div class="card bg-white shadow-md rounded-lg border">
                    <!-- Encabezado de la tarjeta -->
                    <div class="card-header bg-gray-100 px-4 py-3 border-b">
                        <h3 class="card-title text-lg font-semibold text-gray-800">
                            {{ $activity->name }}
                        </h3>
                    </div>

                    <!-- Cuerpo desplazable de la tarjeta -->
                    <div class="card-body scrollable h-50 py-4 px-6 mx-4 overflow-y-auto">
                        <p class="text-gray-600 text-sm mb-4">{!! $activity->description !!}</p>
                        <div class="text-sm text-gray-500">
                            <span>Inicio: {{ $activity->start_date ?? 'No especificado' }}</span> |
                            <span>Fin: {{ $activity->end_date ?? 'No especificado' }}</span>
                        </div>
                    </div>

                    <!-- Pie de la tarjeta con botones -->
                    <div class="card-footer bg-gray-50 px-4 py-3 border-t flex justify-center space-x-4">
                        <!-- Botón Agregar Galería -->
                        <a href="{{ route('activities.show', $activity) }}" title="Subir imágenes a la galería" class="text-teal-500 hover:text-teal-600">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M4 16v4a1 1 0 001 1h14a1 1 0 001-1v-4m-5-5l-4-4m0 0l-4 4m4-4v12" />
                            </svg>
                        </a>
                        
                        
                        <!-- Botón Editar -->
                        <a href="{{ route('activities.edit', $activity->id) }}" title="Editar" class="text-indigo-500 hover:text-indigo-600">
                            <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 12h9m-9-4h9m-9 8h9m-12 3l-3-3 3-3m3 6h9" />
                            </svg>
                        </a>
                        <!-- Botón Eliminar -->
                        <button wire:click="$dispatch('showActivityDelete', { activity: {{ $activity }} })" title="Eliminar" class="text-rose-500 hover:text-rose-600">
                            <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@vite('resources/js/backend/deleteActivity.js')
