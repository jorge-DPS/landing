<form wire:submit.prevent="saveActivity">
    <!-- Activity Name -->
    <div class="flex items-center mb-4">
        <label for="name" class="w-1/3 text-gray-900">Nombre de la Actividad</label>
        <div class="w-2/3 input">
            <input type="text" id="name" wire:model="name" class="form-control"
                placeholder="Nombre de la actividad" />
        </div>
        <div>
            @error('name')
                <livewire:backend.alertas.mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <!-- Descripción -->
    <div class="mb-10 row">
        <label for="description" class="col-lg-3 col-form-label">Descripción</label>
        <div wire:ignore>
            <div id="quill-editor" style="height: 200px;"></div>
        </div>

        <textarea id="description" wire:model.defer="description" hidden></textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Fechas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="start_date" class="block text-gray-900 font-medium mb-2">Fecha de Inicio</label>
                <input type="date" id="start_date" wire:model="start_date"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
                @error('start_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="end_date" class="block text-gray-900 font-medium mb-2">Fecha de Finalización</label>
                <input type="date" id="end_date" wire:model="end_date"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500" />
                @error('end_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Subir Nueva Imagen y Vista Previa -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Subir nueva imagen -->
            <div>
                <label for="cover_image_new" class="block text-gray-900 font-medium mb-2">Subir Nueva Imagen</label>
                <input type="file" id="cover_image_new" wire:model="cover_image_new" accept="image/*"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                @error('cover_image_new')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <!-- Vista previa de la nueva imagen -->
                @if ($cover_image_new)
                    <div class="mt-4">
                        <p class="text-gray-700 text-sm mb-2">Vista Previa:</p>
                        <img src="{{ $cover_image_new->temporaryUrl() }}" alt="Nueva imagen"
                            class="w-50 h-64 object-cover border border-gray-300 rounded-lg">
                    </div>
                @endif
            </div>

            <!-- Imagen actual -->
            {{-- @if ($activity->cover_image) --}}
                <div>
                    <label class="block text-gray-900 font-medium mb-2">Imagen Actual</label>
                    <img src="{{ asset('storage/activity/' . $activity->cover_image) }}" alt="Imagen actual"
                        class="w-full h-64 object-cover border border-gray-300 rounded-lg">
                </div>
            {{-- @else --}}
                <p class="text-gray-700 text-sm">No hay Imagen adjunto.</p>
            {{-- @endif --}}
        </div>

        <!-- Subir PDF -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Subir nuevo PDF -->
            <div>
                <label for="new_attachment" class="block text-gray-900 font-medium mb-2">Subir Nuevo PDF</label>
                <input type="file" id="new_attachment" wire:model="new_attachment" accept="application/pdf"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500">
                @error('new_attachment')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <!-- Campo para título del PDF -->
                <div class="mt-4">
                    <label for="attachment_title" class="block text-gray-900 font-medium mb-2">Título para el Nuevo
                        PDF</label>
                    <input type="text" id="attachment_title" wire:model="attachment_title"
                        class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500"
                        placeholder="Escribe un título para el archivo PDF">
                    @error('attachment_title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- PDF actual -->
            <div>
                <label class="block text-gray-900 font-medium mb-2">PDF Actual</label>
                @if ($activity->attachment)
                    <div class="flex items-center space-x-4">
                        <a href="{{ asset('storage/activity/files/' . $activity->attachment) }}" target="_blank"
                            class="text-blue-500 hover:underline">
                            Ver PDF Actual
                        </a>
                        <p class="text-gray-700 text-sm">{{ $activity->attachment_title }}</p>
                    </div>
                @else
                    <p class="text-gray-700 text-sm">No hay PDF adjunto.</p>
                @endif
            </div>
        </div>
        <!-- Submit Button -->

        <div class="border-t border-gray-200 my-7.5"></div>
        <div class="flex justify-end">
            <div class="btn-conteiner">
                <button type="submit" class="btn-content">
                    <span class="btn-title">GUARDAR</span>
                    <span class="icon-arrow">
                        <!-- Icon SVG -->
                    </span>
                </button>
            </div>
        </div>
</form>

@vite('resources/js/backend/quill.js')
