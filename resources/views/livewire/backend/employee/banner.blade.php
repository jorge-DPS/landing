<div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4 text-center">
        {{ $existingBanner ? 'Actualizar Banner' : 'Subir Banner' }}
    </h2>

    @if (session()->has('success'))
        <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-md">
            {{ session('success') }}
        </div>
    @endif


    @if ($existingBanner)
        <!-- Mostrar el banner existente -->
        <div class="mb-4 flex">
            <h3 class="text-sm font-medium text-gray-700">Banner actual:</h3>
            <img src="{{ asset('storage/employees/banner/' . $section->banner) }}" alt="{{$section->banner}}" class="w-60 h-auto mt-2 rounded-md">
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Input para el archivo -->
        <div>
            <label for="banner" class="block text-sm font-medium text-gray-700">
                {{ $existingBanner ? 'Cambiar Banner' : 'Selecciona un Banner' }}
            </label>
            <input 
                type="file" 
                id="banner" 
                wire:model="banner" 
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-100 file:text-indigo-700 hover:file:bg-indigo-200 mt-1"
            />
            @error('banner') 
                <span class="text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Vista previa del archivo nuevo -->
        @if ($banner)
            <div class="mt-4">
                <h3 class="text-sm font-medium text-gray-700">Vista previa del nuevo banner:</h3>
                <img src="{{ $banner->temporaryUrl() }}" alt="Vista previa" class="w-full h-auto mt-2 rounded-md">
            </div>
        @endif

        <!-- Botón de enviar -->
        <div class="flex justify-end">
            <button 
                type="submit" 
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 disabled:opacity-50 disabled:cursor-not-allowed"
                wire:loading.attr="disabled"
                wire:target="banner"
                :disabled="!$wire.uploads.banner"
            >
                {{ $existingBanner ? 'Actualizar Banner' : 'Subir Banner' }}
            </button>
        </div>
    </form>

    <!-- Indicador de carga -->
    <div wire:loading wire:target="banner" class="text-sm text-gray-500 mt-2">
        Cargando imagen...
    </div>
</div>
