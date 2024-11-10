<div>
    <table class="table table-auto table-border" data-datatable-table="true">
        <thead>
            <tr>
                <th class="w-[60px] text-center">#</th>
                <th class="min-w-[300px]">Nombre</th>
                <th class="min-w-[180px]">Posición</th>
                <th class="min-w-[180px]">Imagen</th>
                <th class="min-w-[180px]">Estado</th>
                <th class="w-[60px]"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $i => $employee)
                <tr>
                    <td class="text-center">{{ $i + 1 }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <img class="rounded-full size-9 shrink-0"
                            src="{{ asset('storage/employees/' . $employee->image) }}"
                            alt="{{ 'imagen empleado: ' . $employee->name }}" />
                    </td>
                    <td>
                        {{ $employee->status ? 'Activo' : 'Inactivo' }}
                    </td>
                    <td class="text-center">
                        <div class="menu flex-inline" data-menu="true">
                            <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                                data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                    <i class="ki-filled ki-dots-vertical"></i>
                                </button>
                                <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                    {{-- <div class="menu-item">
                                    <a class="menu-link" href="#"><span class="menu-icon"><i
                                                class="ki-filled ki-search-list"></i></span> <span
                                            class="menu-title">View</span></a>
                                </div> --}}
                                    <div class="menu-item">
                                        <a class="menu-link"
                                            href="{{ route('employees.edit', ['section' => $section, 'page' => $page, 'employee' => $employee]) }}"><span
                                                class="menu-icon"><i class="ki-filled ki-pencil"></i></span> <span
                                                class="menu-title">Editar</span></a>
                                    </div>
                                    <div class="menu-item">
                                        <button class="menu-link" wire:click="$dispatch('mostrarAlerta',  { employee: {{ $employee}}, section: {{ $section }} })">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-trash"></i>
                                            </span>
                                            <span class="menu-title">Eliminar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $employees->links() }}
    </div>
</div>

@push('scripts-backend-employees')
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
@endpush
