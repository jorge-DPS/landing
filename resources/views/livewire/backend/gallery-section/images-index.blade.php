<div>
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
    <h2 class="text-lg font-semibold text-gray-900 mb-4">Lista de Imágenes</h2>
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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($images as $image)
            <div
                class="relative group border-2 border-transparent rounded-lg overflow-hidden shadow hover:shadow-lg transition-all"
                data-id="{{ $image->id }}"
            >
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="w-full aspect-w-1 aspect-h-1">
                        <img src="{{ asset('storage/uploads/images/' . $image->filename) }}" alt="Image"
                            class="w-full h-full object-cover">
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white font-semibold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer"
                        data-delete
                    >
                        Eliminar
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center col-span-full">No hay imágenes cargadas aún.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $images->links() }}
    </div>
</div>

