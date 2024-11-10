<form wire:submit.prevent="editarEmployee">
    <div class="card-header gap-2">
        <h3 class="card-title">Datos del Empleado</h3>
    </div>
    <div class="card-body lg:py-7.5 py-5">

        <!-- Nombre -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="name">Nombre</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="name" id="name"
                        placeholder="Nombre del empleado" class="form-control @error('name') is-invalid @enderror" />
                </label>
                @error('name')
                    <livewire:backend.employee.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <!-- Posición -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="position">Posición</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="text" wire:model="position" id="position"
                        placeholder="Cargo del empleado" class="form-control @error('position') is-invalid @enderror" />
                </label>
                @error('position')
                    <div class="invalid-feedback text-danger mt-1" style="font-size: 0.875rem; color: #F64E60;">
                        <i class="ki-duotone ki-warning"></i> {{ $message }}
                    </div>
                @enderror
            </div>
        </div>



        <!-- Imagen -->
        {{-- <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="image">Imagen</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="file" wire:model="image" id="image" accept="image/*"
                        class="form-control @error('image') is-invalid @enderror" />
                </label>

                <div class="my-5 w-80">
                    @if ($image)
                        Imagen:
                        <img src="{{ $image->temporaryUrl() }}" alt="imagen">
                    @endif
                </div>

                @error('image')
                <livewire:backend.employee.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div> --}}

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

        {{-- Imagen --}}
        <div class="my-5 w-80">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="image">Imagen Actual</label>
            </div>
            <img src="{{ asset('storage/employees/' . $employee->image) }}" alt="{{ 'imagen empleado: ' . $employee->name }}">
        </div>

        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold" for="image">Imagen</label>
            </div>
            <div class="w-full">
                <label class="input">
                    <input type="file" wire:model="image_new" id="image" accept="image/*"
                        class="form-control @error('image') is-invalid @enderror" />
                </label>

                <div class="my-5 w-80">
                    @if ($image_new)
                        Imagen nueva:
                        <img src="{{ $image_new->temporaryUrl() }}" alt="imagen">
                    @endif
                </div>

                @error('image_new')
                <livewire:backend.employee.mostrar-alerta :message="$message"/>
                @enderror
            </div>
        </div>

        <div class="border-t border-gray-200 my-7.5"></div>
        <div class="flex justify-end">
            <div class="btn-conteiner">
                <button type="submit" class="btn-content">
                    <span class="btn-title uppercase">Guardar Cambios</span>
                    <span class="icon-arrow">
                        <!-- Icon SVG -->
                    </span>
                </button>
            </div>
        </div>
    </div>
</form>
