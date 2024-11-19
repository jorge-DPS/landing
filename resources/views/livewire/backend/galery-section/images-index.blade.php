<style>
    .selected {
        border-width: 4px;
        border-color: #3b82f6; /* Azul de Tailwind (blue-500) */
    }

    .origin-center {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    .selected [data-selected-text] {
        opacity: 1;
    }

    [data-selected-text] {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
</style>


<div class="p-6 bg-gray-50">
    <!-- Encabezado -->
    <div class="flex flex-wrap items-center justify-between gap-5 pb-5 border-b border-gray-300">
        <div class="flex flex-col gap-1">
            <h1 class="text-3xl font-extrabold leading-tight text-gray-800">
                Galería de Imágenes
            </h1>
            <p class="text-sm text-gray-500">
                Selecciona las imágenes que deseas eliminar.
            </p>
        </div>

        <!-- Botón para eliminar seleccionados -->
        <div>
            <button 
                class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-300 disabled:bg-gray-300 disabled:cursor-not-allowed disabled:shadow-none"
                id="deleteSelected"
                disabled
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                Eliminar Seleccionados
            </button>
        </div>
    </div>

    <!-- Galería de Imágenes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
        @foreach($images as $image)
            <div class="relative group border-2 border-transparent rounded-lg overflow-hidden shadow hover:shadow-lg transition-all">
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="w-full aspect-w-1 aspect-h-1">
                        <img 
                            src="{{ asset('storage/uploads/images/' . $image->filename) }}" 
                            alt="Image" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="mt-8">
        {{ $images->links() }}
    </div>
</div>


@vite('resources/js/deleteImages.js')