<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($employees as $employee)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Imagen del empleado -->
                <div class="relative">
                    <img
                        src="{{ asset('storage/employees/' . $employee->image) }}"
                        alt="{{ 'Imagen del empleado: ' . $employee->name }}"
                        class="w-full h-60 object-cover"
                        onerror="this.onerror=null;this.src='{{ asset('/assetsBackend/media/avatars/blank.png') }}';"
                    >
                    <span class="absolute top-2 left-2 {{ $employee->status ? 'bg-green-500' : 'bg-red-500' }} text-white px-3 py-1 text-xs rounded-full">
                        {{ $employee->status ? 'Activo' : 'Inactivo' }}
                    </span>
                </div>
                
                <!-- Contenido -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 truncate">{{ $employee->name }}</h3>
                    <p class="text-gray-600 text-sm">{{ $employee->position }}</p>
                    <!-- Botones -->
                    <div class="mt-4 flex justify-between">
                        <a 
                            href="{{ route('employees.edit', ['section' => $section, 'page' => $page, 'employee' => $employee]) }}" 
                            class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            <i class="ki-filled ki-pencil mr-2"></i> Editar
                        </a>
                        <button 
                            class="text-red-600 hover:text-red-800 font-medium delete-employee" 
                            data-employee-id="{{ $employee->id }}">
                            <i class="ki-filled ki-trash mr-2"></i> Eliminar
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Paginación -->
    <div class="mt-6">
        {{ $employees->links() }}
    </div>
</div>


@vite('resources/js/backend/deleteEmployee.js')

{{-- @push('scripts-backend-employees')
    <script>
        Livewire.on('mostrarAlerta', (datos)=>{
            // El siguiente código es el Alert utilizado
            Swal.fire({
                title: '¿Eliminar Empleado?',
                text: "Un empleado eliminado no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    // console.log(employee , section);

                    Livewire.dispatch('eliminarEmployee', {
                        employee: datos.employee,
                        section: datos.section})
                    Swal.fire(
                        // eliminar empleado


                        'Se eliminó el empleado',
                        'Eliminado correctamente',
                        'success'
                    )
                }
            })

        })
    </script>
@endpush --}}
