<form wire:submit.prevent="createCover">
    <div class="card-header gap-2">
        <h3 class="card-title">Datos de la portada</h3>
    </div>
    <div class="card-body lg:py-7.5 py-5">
        <!-- Título -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="title">Título</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="title" id="title"
                        placeholder="Título de la portada" class="form-control @error('title') is-invalid @enderror" />
                
                    </label>
                @error('title')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- Subtítulo -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="subtitle">Subtítulo</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="subtitle" id="subtitle"
                        placeholder="Subtítulo de la portada" class="form-control @error('subtitle') is-invalid @enderror" />
                </label>
                @error('subtitle')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- Descripción -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="description">
                    Descripción
                </label>
            </div>
            <div class="w-full">
                <label >
                    <textarea wire:model="description" id="description"
                        placeholder="Descripción de la portada" class="textarea" rows="3" @error('description') is-invalid @enderror"></textarea>
                </label>
                @error('description')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>
        {{-- <div class="w-full">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-32">
              Example Label
             </label>
             <textarea class="textarea" name="memo" placeholder="Text" rows="6"></textarea>
            </div>
           </div> --}}

        <!-- Imagen -->
        
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="image">Imagen</label>
            </div>
            <div class="w-full">
                <label class="">
                    <input type="file" wire:model="image" id="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-900 border rounded-md shadow-sm file:bg-red-700 file:text-white file:rounded-md file:px-4 file:py-2 focus:ring-red-500 focus:border-red-500 @error('image') border-red-500 @enderror">
                </label>

                <div class="my-5 w-80">
                    @if ($image)
                        Imagen:
                        <img src="{{ $image->temporaryUrl() }}" alt="imagen">
                    @endif
                </div>

                @error('image')
                <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- Estado -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="status">Estado</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <select wire:model="status" id="status" class="form-control @error('status') is-invalid @enderror"
                        required>
                        <option>-- Seleccione --</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </label>
                @error('status')
                    <div class="invalid-feedback text-danger mt-1" style="font-size: 0.875rem; color: #F64E60;">
                        <i class="ki-duotone ki-warning"></i> {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Botón de texto -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="button_text">Texto del botón</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="button_text" id="button_text"
                        placeholder="Texto del botón" class="form-control @error('button_text') is-invalid @enderror" />
                </label>
                @error('button_text')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- URL del botón -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="button_url">URL del botón</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="button_url" id="button_url"
                        placeholder="URL del botón" class="form-control @error('button_url') is-invalid @enderror" />
                </label>
                @error('button_url')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- Abrir en nueva pestaña -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="open_in_new_tab">Abrir en nueva pestaña</label>
            </div>
            <div class="w-full">
                <label class="">
                    <select wire:model="open_in_new_tab" id="open_in_new_tab" class="select @error('open_in_new_tab') is-invalid @enderror">
                        <option>-- Seleccione --</option>
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </label>
                @error('open_in_new_tab')
                    <livewire:backend.alertas.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        {{-- Posicion de la Iamgen --}}
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="image_position">Posición de la imagen</label>
            </div>
            <div class="w-full">
                <label class="">
                    <select wire:model="image_position" id="image_position" class="select @error('image_position') is-invalid @enderror">
                        <option value="left">Izquierda</option>
                        <option value="right">Derecha</option>
                    </select>
                </label>
                @error('image_position')
                    <div class="invalid-feedback text-danger mt-1" style="font-size: 0.875rem; color: #F64E60;">
                        <i class="ki-duotone ki-warning"></i> {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="border-t border-gray-200 my-7.5"></div>
        <div class="flex justify-end">
            <div class="btn-conteiner">
                <button type="submit" class="btn-content">
                    <span class="btn-title">CREAR</span>
                    <span class="icon-arrow">
                        <!-- Icono SVG -->
                    </span>
                </button>
            </div>
        </div>
    </div>
</form>
