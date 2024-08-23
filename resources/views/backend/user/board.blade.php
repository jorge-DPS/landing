<table class="table table-auto table-border" data-datatable-table="true">
    <thead>
    <tr>
        <th class="w-[60px] text-center">
           #
        </th>
        <th class="min-w-[300px]">
               <span class="sort asc">
                <span class="sort-label">
                 Nombre
                </span>
                <span class="sort-icon">
                </span>
               </span>
        </th>
        <th class="min-w-[180px]">
               <span class="sort">
                <span class="sort-label">
                 Status
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
    @foreach($data as $i => $user)
        <tr>
            <td class="text-center">
                {{ $i+1 }}
            </td>
            <td>
                <div class="flex items-center gap-2.5">
                    <img alt="" class="rounded-full size-9 shrink-0" src="{{ $user->avatar ? asset($user->avatar) : asset('/assetsBackend/media/avatars/blank.png') }}"/>
                    <div class="flex flex-col">
                        <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                            {{ $user->name }}
                        </a>
                        <a class="text-2sm font-medium text-gray-600 hover:text-primary-active" href="#">
                            {{ $user->email }}
                        </a>
                    </div>
                </div>
            </td>

            <td>{{ $user->email }}</td>
            <td class="text-center">
                <div class="menu flex-inline" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px"
                         data-menu-item-placement="bottom-end"
                         data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical">
                            </i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]"
                             data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                    <span class="menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                                    <span class="menu-title">
                     View
                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                    <span class="menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                                    <span class="menu-title">
                     Export
                    </span>
                                </a>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                    <span class="menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                                    <span class="menu-title">
                     Edit
                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                    <span class="menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                                    <span class="menu-title">
                     Make a copy
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
                     Remove
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