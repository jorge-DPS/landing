// const apiUrl = "http://127.0.0.1:8000/api/pages";
// const element = document.querySelector("#kt_remote_table");

// const routes = {
//     configuration: "{{ route('pages.configuration.index', ':id') }}",
//     edit: "{{ route('pages.edit', ':id') }}",
//     destroy: "{{ route('pages.destroy', ':id') }}",
// };

// const dataTableOptions = {
//     apiEndpoint: apiUrl,
//     pageSize: 5,
//     columns: {
//         status: {
//             title: "Status",
//         },
//         title: {
//             title: "Title",
//         },
//         description: {
//             title: "Description",
//         },
//         seo_title: {
//             title: "SEO",
//         },
//         id: {
//             render: (item, data, context) => {
//                 const configurationUrl = routes.configuration.replace(':id', data.id);
//                 const editUrl = routes.edit.replace(':id', data.id);
//                 const destroyUrl = routes.destroy.replace(':id', data.id);
            
//                 return `
//                     <div class="menu flex-inline" data-menu="true">
//                         <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
//                             data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
//                             <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
//                                 <i class="ki-filled ki-dots-vertical"></i>
//                             </button>
//                             <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
//                                 <div class="menu-item">
//                                     <a class="menu-link" href="${configurationUrl}">
//                                         <span class="menu-icon">
//                                             <i class="ki-filled ki-file-up"></i>
//                                         </span>
//                                         <span class="menu-title">Configuración</span>
//                                     </a>
//                                 </div>
//                                 <div class="menu-item">
//                                     <a class="menu-link" href="${editUrl}">
//                                         <span class="menu-icon">
//                                             <i class="ki-filled ki-pencil"></i>
//                                         </span>
//                                         <span class="menu-title">Editar</span>
//                                     </a>
//                                 </div>
//                                 <div class="menu-separator"></div>
//                                 <div class="menu-item">
//                                     <form action="${destroyUrl}" method="POST">
//                                         <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').getAttribute('content')}">
//                                         <input type="hidden" name="_method" value="DELETE">
//                                         <button type="submit" class="menu-link">
//                                             <span class="menu-icon">
//                                                 <i class="ki-filled ki-trash"></i>
//                                             </span>
//                                             <span class="menu-title">Eliminar</span>
//                                         </button>
//                                     </form>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>`;
//             },
            
            
            
            
//         },
//     },
// };

// const dataTable = new KTDataTable(element, dataTableOptions);

// const datatableEl = document.querySelector('#table_respaldo');
// getInstance(datatableEl)
// const options = {
// 	pageSize: 5,
// 	pageMore: true
// };
// const datatable = new KTDataTable(datatableEl, options);
