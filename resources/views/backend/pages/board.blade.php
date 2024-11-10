<table id="table_respaldo" class="table table-auto table-border" data-datatable-table="true">
    <thead>
        <tr>
            <th class="w-[30px] text-center">
                <span class="sort asc">
                    <span class="sort-label">
                        #
                    </span>
                </span>
            </th>
            <th class="min-w-[180px]">
                <span class="sort">
                    <span class="sort-label">
                        Título
                    </span>
                    <span class="sort-icon">
                    </span>
                </span>
            </th>
            <th class="min-w-[180px]">
                <span class="sort">
                    <span class="sort-label">
                        Descripción
                    </span>
                    <span class="sort-icon">
                    </span>
                </span>
            </th>
            <th class="min-w-[180px]">
                <span class="sort">
                    <span class="sort-label">
                        Título del CEO
                    </span>
                    <span class="sort-icon">
                    </span>
                </span>
            </th>
            <th class="min-w-[180px]">
                <span class="sort">
                    <span class="sort-label">
                        Menú vínculado
                    </span>
                    <span class="sort-icon">
                    </span>
                </span>
            </th>
            <th class="w-[60px]">
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($pages as $i => $pag)
            <tr>
                <td>
                    <div class="flex items-center gap-2.5">
                        <div class="flex flex-col">
                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                href="#">
                                {{ $i + 1 }}
                            </a>
                        </div>
                    </div>
                </td>

                <td>{{ $pag->title }}</td>
                <td>{{ $pag->description }}</td>
                <td>{{ $pag->seo_title }}</td>
                <td>
                    <span class="badge badge-primary badge-pill gap-1.5">
                        <span class="badge badge-dot badge-light size-1.5">
                        </span>
                        {{ $pag->menu->title }}
                    </span>
                </td>
                <td class="text-center">
                    <div class="menu flex-inline" data-menu="true">
                        <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                            data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                <i class="ki-filled ki-dots-vertical">
                                </i>
                            </button>
                            <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('pages.configuration.index', $pag) }}">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-file-up">
                                            </i>
                                        </span>
                                        <span class="menu-title">
                                            Configuración
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('pages.edit', $pag->id) }}">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-pencil">
                                            </i>
                                        </span>
                                        <span class="menu-title">
                                            Editar
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-separator">
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-trash">
                                            </i>
                                        </span>
                                        <span class="menu-title">
                                            Eliminar
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
