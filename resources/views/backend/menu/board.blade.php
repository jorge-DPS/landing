<style>
    #table_respaldo tbody tr:hover {
        background-color: #e0f7fa;
    }

    #table_respaldo tbody tr {
        cursor: pointer;
    }

    #table_respaldo tbody tr.sortable-chosen {
        background-color: #b2ebf2;
    }
</style>
<table id="table_respaldo" class="table table-auto table-border" data-datatable-table="true">
    <thead>
    <tr>
        <th class="w-[30px] text-center">
               <span class="sort asc">
                <span class="sort-label">
                 Orden
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
        <th class="w-[60px]">
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($menus as $i => $user)
        <tr>
            <td>
                <div class="flex items-center gap-2.5">
                    <div class="flex flex-col">
                        <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                            {{ $user->order }}
                        </a>
                    </div>
                </div>
            </td>

            <td>{{ $user->title }}</td>
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

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tableBody = document.getElementById('table_respaldo').getElementsByTagName('tbody')[0];
            new Sortable(tableBody, {
                animation: 150,
                handle: 'tr',
                onEnd: function (evt) {
                    const order = Array.from(tableBody.children).map((row, index) => {
                        const idElement = row.querySelector('.id');
                        const idConexionElement = row.querySelector('.id_conexion');

                        if (idElement && idConexionElement) {
                            return {
                                id_conexion: idConexionElement.value,
                                id: idElement.value,
                                order: index + 1
                            };
                        } else {
                            console.error('Could not find necessary elements in row:', row);
                            return null;
                        }
                    }).filter(item => item !== null);

                    $.ajax({
                        url: "",
                        type: 'POST',
                        data: JSON.stringify(order),
                        contentType: 'application/json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // CSRF token desde el meta
                        },

                        success: function(response) {
                            if (response.Codigo == 0) {
                                $('#table_respaldo tbody').html($(response.Data).find('tbody').html());
                                toastr.success(response.Mensaje);
                            } else {
                                executeExample('error', response.Mensaje);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });


                }
            });
        });
    </script>
@endpush