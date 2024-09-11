<style>
    #table_respaldo tbody tr:hover {
        background-color: rgba(177, 42, 56, 0.14);
    }

    #table_respaldo tbody tr {
        cursor: pointer;
    }

    #table_respaldo tbody tr.sortable-chosen {
        background-color: rgba(213, 65, 80, 0.27);
    }
</style>
<table id="table_respaldo" class="table table-auto table-border" data-datatable-table="false">
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
        @foreach ($menus as $i => $menu)
            <tr>
                <td>
                    <div class="flex items-center gap-2.5">
                        <div class="flex flex-col">
                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                href="#">
                                {{ $menu->order }}
                            </a>
                        </div>
                    </div>
                </td>
                <input type="hidden" class="id" value="{{ $menu->id }}">

                <td>{{ $menu->title }}</td>
                <td class="text-center">
                    <div class="menu flex-inline" data-menu="true">
                        <div class="menu-item">
                            <a href="javascript:void(0)" class="btn btn-primary"
                                onclick="updateSection({{ $menu->id }}, '{{ $menu->title }}')"
                                data-modal-toggle="#createSection">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-pencil"></i>
                                </span>
                            </a>
                        </div>
                        <div class="menu-item ml-3">
                            <a class="btn btn-primary" href="javascript:void(0)"
                                onclick="deleteSection({{ $menu->id }})">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-trash">
                                    </i>
                                </span>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="7">
                <div
                    style="display: flex; align-items: center; padding: 8px; background-color: rgba(236,91,103,0.18); font-size: 12px; color: #2d0000; border-radius: 20px;">
                    <i class="ki-solid ki-information-2 text-primary text-2xl" style="margin-right: 8px;"></i>
                    <span>
                        Para reorganizar las filas de la tabla <strong>debes arrastrar al lugar</strong>.
                        el nuevo orden será procesado automáticamente.
                    </span>
                </div>
            </td>
        </tr>
    </tfoot>
</table>
<div class="modal modal-dialog modal-center max-w-[600px]" data-modal="true" data-modal-backdrop="false"
    data-modal-persistent="true" id="createSection">
    <div class="modal-content shadow-lg"
        style="background: #ffffff; border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">

        <div class="modal-header">
            <h3 class="modal-title">
                Agregar una sección nueva
            </h3>
            <button class="btn btn-xs btn-icon btn-danger" data-modal-dismiss="true">
                <i class="ki-outline ki-cross">
                </i>
            </button>
        </div>
        <div class="modal-body">
            <form id="postForm">
                <input id="menuId" type="hidden" name="id">
                <div class="w-full mt-2 mb-2">
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-32">
                            Nombre
                        </label>
                        <div class="flex flex-col w-full gap-1">
                            <input id="menuTitle" class="input" name="title" placeholder="Agragar un nombre"
                                type="text" value="" />
                            <span class="form-hint text-gray-500">
                                El nombre de la sección es obligatorio
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="btn btn-primary" data-modal-toggle="#modal_6_2">
                        Guardar
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.getElementById('table_respaldo').getElementsByTagName('tbody')[0];
            new Sortable(tableBody, {
                animation: 150,
                handle: 'tr',
                onEnd: function(evt) {
                    const order = Array.from(tableBody.children).map((row, index) => {
                        const idElement = row.querySelector('.id');

                        if (idElement) {
                            return {
                                id: idElement.value,
                                order: index + 1
                            };
                        } else {
                            console.error('Could not find necessary elements in row:', row);
                            return null;
                        }
                    }).filter(item => item !== null);

                    $.ajax({
                        url: "{{ route('backup.connection.updateOrder') }}",
                        type: 'POST',
                        data: JSON.stringify(order),
                        contentType: 'application/json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {
                            if (response.Codigo == 0) {
                                $('#table_respaldo tbody').html($(response.Data).find(
                                    'tbody').html());
                                Swal.fire({
                                    position: "top-end",
                                    title: "Reordenado exitoso",
                                    text: response.Mensaje,
                                    showConfirmButton: false,
                                    icon: "success",
                                    timer: 3000,
                                    scrollbarPadding: false,
                                    heightAuto: false,
                                    backdrop: false,
                                    customClass: {
                                        popup: 'swal-alert-success',
                                        title: 'swal-title-overlay',
                                        content: 'swal-content-overlay'
                                    },
                                    didOpen: () => {
                                        document.body.classList.add(
                                            'swal-open');
                                    },
                                    willClose: () => {
                                        document.body.classList.remove(
                                            'swal-open');
                                    }
                                });
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

    <script>
        function deleteSection(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('menu.delete') }}",
                        method: 'DELETE',
                        data: {
                            id: id
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.Codigo == 0) {
                                $('#table_respaldo tbody').html($(response.Data).find(
                                    'tbody').html());
                                Swal.fire({
                                    position: "top-end",
                                    title: "Eliminado exitoso",
                                    text: response.Mensaje,
                                    showConfirmButton: false,
                                    icon: "success",
                                    timer: 3000,
                                    scrollbarPadding: false,
                                    heightAuto: false,
                                    backdrop: false,
                                    customClass: {
                                        popup: 'swal-alert-success',
                                        title: 'swal-title-overlay',
                                        content: 'swal-content-overlay'
                                    },
                                    didOpen: () => {
                                        document.body.classList.add(
                                            'swal-open');
                                    },
                                    willClose: () => {
                                        document.body.classList.remove(
                                            'swal-open');
                                    }
                                });
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
        }
    </script>

    <script>
        function updateSection(id, title) {
            document.querySelector('#menuTitle').value = title;
            document.querySelector('#menuId').value = id;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#postForm').on('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        url: "{{ route('menu.update') }}",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            const modalEl = document.querySelector('#createSection');
                        const modal = KTModal.getInstance(modalEl);
                        $('#postForm')[0].reset();
                        modal.hide();
                            if (response.Codigo == 0) {
                                $('#table_respaldo tbody').html($(response.Data).find(
                                    'tbody').html());
                                Swal.fire({
                                    position: "top-end",
                                    title: "Actualizado exitoso",
                                    text: response.Mensaje,
                                    showConfirmButton: false,
                                    icon: "success",
                                    timer: 3000,
                                    scrollbarPadding: false,
                                    heightAuto: false,
                                    backdrop: false,
                                    customClass: {
                                        popup: 'swal-alert-success',
                                        title: 'swal-title-overlay',
                                        content: 'swal-content-overlay'
                                    },
                                    didOpen: () => {
                                        document.body.classList.add(
                                            'swal-open');
                                    },
                                    willClose: () => {
                                        document.body.classList.remove(
                                            'swal-open');
                                    }
                                });
                            } else {
                                executeExample('error', response.Mensaje);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                });
        });
                            
    </script>
@endpush
