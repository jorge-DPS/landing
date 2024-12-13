<!-- resources/views/livewire/portadas-lista.blade.php -->
<!-- resources/views/livewire/portadas-lista.blade.php -->
<div class="flex justify-center items-center py-10">
    <div class="bg-white shadow-xl rounded-lg overflow-hidden w-full max-w-4xl">
        <div class="flex flex-col md:flex-row items-stretch">
            <!-- Imagen a la izquierda -->
            <div class="w-20 md:w-1/2">
                <img src="{{ asset('storage/cover/images/' . $cover->image) }}" alt="Portada"
                    class="w-80 h-80 object-cover"
                    onerror="this.onerror=null;this.src='{{ asset('/assetsBackend/media/avatars/blank.png') }}';">
            </div>

            <!-- Contenido a la derecha -->
            <div class="flex flex-col justify-between p-1 w-full md:w-1/2">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">{{ $cover->title }}</h2>
                    <p class="text-gray-600 mt-4 text-lg">{{ $cover->subtitle }}</p>
                    <p class="text-gray-500 mt-4">{{ $cover->description }}</p>
                </div>
                <div class="mt-6">
                    <p class="text-sm">
                        <span class="font-bold">Estado:</span>
                        <span class="{{ $cover->status ? 'text-green-500' : 'text-red-500' }}">
                            {{ $cover->status ? 'Activo' : 'Inactivo' }}
                        </span>
                    </p>
                </div>
                {{-- <div class="mt-8 flex space-x-4">
                    <!-- Botón de editar -->
                    <a href="{{ route('portada.edit', [$page, $section, $cover]) }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none">
                        <i class="fas fa-edit"></i> Editar
                    </a>

                    <!-- Botón de eliminar -->
                    <button wire:click="$dispatch('showAlertCover',  { cover: {{ $cover}}, section: {{ $section }} })" class="bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600 focus:outline-none">
                        <i class="fas fa-trash"></i> Eliminar
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</div>


