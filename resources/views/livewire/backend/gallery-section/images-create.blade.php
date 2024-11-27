<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6 mb-8">
    <!-- Título pequeño y alineado a la izquierda -->
    <h2 class="text-sm font-semibold text-gray-700 mb-4">Subir Imágenes</h2>
    <form wire:submit="imagesCreate" class="space-y-4">
        <div class="flex flex-col gap-3">
            <!-- Etiqueta del campo a la izquierda -->
            <label class="form-label text-sm font-medium text-gray-700">Selecciona Imágenes</label>
            <div
                class="relative border border-gray-300 rounded-lg p-3 hover:border-blue-500 focus-within:ring-2 focus-within:ring-blue-500">
                <input wire:model.live="images" type="file" multiple
                    class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer">
                <div class="flex items-center justify-between">
                    <span class="text-gray-500 text-sm">
                        Selecciona archivos...
                    </span>
                    <i class="ki-outline ki-upload text-blue-500"></i>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <!-- Mostrar la cantidad de imágenes seleccionadas -->
                <span class="text-sm text-gray-600">
                    Imágenes seleccionadas: {{ count($images) }}
                </span>
                @error('images.*')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="btn btn-primary bg-primary-600 hover:bg-primary-700 text-white font-medium px-4 py-2 rounded-lg"
                wire:loading.attr="disabled"
                wire:target="imagesCreate"
                :disabled="{{ count($images) === 0 ? 'true' : 'false' }}">
                <!-- Loading spinner -->
                <span wire:loading wire:target="imagesCreate">
                    Subiendo...
                </span>
                <span wire:loading.remove wire:target="imagesCreate">
                    Subir
                </span>
            </button>
        </div>
    </form>
</div>