<form wire:submit.prevent="saveActivity">
    <!-- Activity Name -->
    <div class="flex items-center mb-4">
        <label for="name" class="w-1/3 text-gray-900">Nombre de la Actividad</label>
        <div class="w-2/3 input">
            <input type="text" id="name" wire:model="name" class="form-control" placeholder="Nombre de la actividad" />
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
    @error('description') <span class="text-danger">{{ $message }}</span> @enderror

    <!-- Start Date -->
    <div class="flex items-center mb-4">
        <label for="start_date" class="w-1/3 text-gray-900">Fecha de Inicio</label>
        <div class="w-2/3">
            <input type="date" id="start_date" wire:model="start_date"
                class="w-full p-2 border rounded-md focus:ring focus:ring-red-500" />
            @error('start_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- End Date -->
    <div class="flex items-center mb-4">
        <label for="end_date" class="w-1/3 text-gray-900">Fehca de finalización</label>
        <div class="w-2/3">
            <input type="date" id="end_date" wire:model="end_date"
                class="w-full p-2 border rounded-md focus:ring focus:ring-red-500" />
            @error('end_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Cover Image -->
    <div class="flex items-center mb-4">
        <label for="cover_image" class="w-1/3 text-gray-700">Imagen de Portada</label>
        <div class="w-2/3">
            <input type="file" id="cover_image" wire:model="cover_image" class="file-input" />
            @error('cover_image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div wire:loading wire:target="cover_image" class="text-blue-500 text-sm mt-1">Uploading...</div>
        </div>
    </div>

    {{-- <!-- Attachment -->
    <div class="flex items-center mb-4">
        <label for="attachment" class="w-1/3 text-gray-700">Archivo (PDF)</label>
        <div class="w-2/3">
            <input type="file" id="attachment" wire:model="attachment" class="file-input" />
            @error('attachment')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div wire:loading wire:target="attachment" class="text-blue-500 text-sm mt-1">Uploading...</div>
        </div>
    </div>

    <!-- Attachment Title -->
    <div class="flex items-center mb-4">
        <label for="attachment_title" class="w-1/3 text-gray-700">Titulo para el archivo</label>
        <div class="w-2/3 input">
            <input type="text" id="attachment_title" wire:model="attachment_title" class="form-control"
                placeholder="Título para el Archivo" />
            @error('attachment_title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div> --}}


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
