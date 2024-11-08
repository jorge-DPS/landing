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
    @foreach($employees as $i => $employee)
        <tr>
            <td class="text-center">{{ $i + 1 }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->position }}</td>
            <td>
                <img alt="Imagen de {{ $employee->name }}" class="rounded-full size-9 shrink-0"
                     src="{{ $employee->image ? asset($employee->image) : asset('/assetsBackend/media/avatars/blank.png') }}"/>
            </td>
            <td>
                {{ $employee->status ? 'Activo' : 'Inactivo' }}
            </td>
            <td class="text-center">
                <div class="menu flex-inline" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical"></i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="#"><span class="menu-icon"><i class="ki-filled ki-search-list"></i></span> <span class="menu-title">View</span></a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#"><span class="menu-icon"><i class="ki-filled ki-pencil"></i></span> <span class="menu-title">Edit</span></a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#"><span class="menu-icon"><i class="ki-filled ki-trash"></i></span> <span class="menu-title">Remove</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
