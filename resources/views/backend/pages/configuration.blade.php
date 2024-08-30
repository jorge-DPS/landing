@extends('backend.layouts.app')

@section('title')
    <title>Páginas</title>
@endsection

@section('breadcrumbs')
    <div class="flex items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0"
         data-reparent="true" data-reparent-mode="prepend|lg:prepend"
         data-reparent-target="#content_container|lg:#header_container">
       <span class="text-gray-600">
        {{ Breadcrumbs::render('home') }}
       </span>
        <i class="ki-filled ki-right text-gray-500 text-3xs"></i>
        <span class="text-gray-700">
        {{ Breadcrumbs::render('carrusel.index') }}
       </span>
    </div>
@endsection

@section('content')
    <style>
        .custom-content-wrapper .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 15px;
        }

        .custom-content-wrapper .menu {
            position: sticky;
            top: 0;
            background-color: #f7f7f9;
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            z-index: 1000;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .custom-content-wrapper .button {
            display: inline-flex;
            align-items: center;
            padding: 8px 18px;
            border-radius: 6px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.85em;
            margin-right: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-content-wrapper .button.blue {
            background-color: #007bff;
        }

        .custom-content-wrapper .button.green {
            background-color: #28a745;
        }

        .custom-content-wrapper .button.yellow {
            background-color: #ffc107;
            color: #333;
        }

        .custom-content-wrapper .button:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .custom-content-wrapper .button svg {
            margin-right: 6px;
        }

        /* Contenedor de las secciones usando Grid */
        .content-wrapper {
            display: flex;
            gap: 20px;
            padding: 0 20px;
        }

        .dynamic-section {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .static-section {
            flex: 2;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .dynamic-section .section {
            border: 1px solid #e3e6f0;
            padding: 10px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.2s ease;
        }

        .static-section .section {
            border: 1px solid #e3e6f0;
            padding: 10px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            min-height: 150px;
            transition: transform 0.2s ease;
        }

        .custom-content-wrapper .section:hover {
            transform: translateY(-3px);
        }

        .custom-content-wrapper .section .title {
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 8px;
            color: #343a40;
        }

        .custom-content-wrapper .section .content {
            margin-bottom: 10px;
            color: #6c757d;
            font-size: 0.85em;
        }

        .custom-content-wrapper .section.blue {
            background-color: #e9f7ff;
        }

        .custom-content-wrapper .section.green {
            background-color: #e6f9e9;
        }

        .custom-content-wrapper .section.yellow {
            background-color: #fff9e6;
        }

        .custom-content-wrapper .form-group {
            margin-bottom: 12px;
        }

        .custom-content-wrapper .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #495057;
        }

        .custom-content-wrapper .form-group input,
        .custom-content-wrapper .form-group textarea {
            width: 100%;
            padding: 6px 10px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            font-size: 0.8em;
            color: #495057;
            background-color: #f8f9fa;
            transition: border-color 0.2s ease;
        }

        .custom-content-wrapper .form-group input:focus,
        .custom-content-wrapper .form-group textarea:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 3px rgba(128, 189, 255, 0.4);
        }

        .custom-content-wrapper .form-group textarea {
            resize: vertical;
            height: 60px;
        }

        .custom-content-wrapper .section button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.8em;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .custom-content-wrapper .section button:hover {
            background-color: #0056b3;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-content-wrapper .section h3 {
            margin-top: 10px;
            font-size: 0.95em;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 8px;
        }

        .custom-content-wrapper .section .form-group input[type="text"] {
            background-color: #fff;
        }

        .json-output {
            background-color: #f8f9fa;
            padding: 8px;
            border-radius: 6px;
            font-family: monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 0.75em;
            color: #495057;
            border: 1px solid #ced4da;
            margin-top: 10px;
        }
    </style>


    <main x-data="dynamicContent()" class="custom-content-wrapper grow content pt-5">
        <div class="menu">
            <button class="button blue" @click="addSection('persona')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                     height="16">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Añadir Persona
            </button>
            <button class="button green" @click="addSection('galeria')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                     height="16">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Añadir Galería
            </button>
            <button class="button yellow" @click="addSection('portada')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                     height="16">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Añadir Portada
            </button>
        </div>

        <div class="content-wrapper">
            <div class="dynamic-section">
                <template x-for="section in sections" :key="section.id">
                    <div :id="'section-' + section.id" :class="section.className" class="section">
                        <h2 class="title" x-text="section.title"></h2>
                        <p class="content" x-text="section.content"></p>
                        <form>
                            <div class="form-group">
                                <label :for="section.inputId">Título:</label>
                                <input type="text" :id="section.inputId" name="title">
                            </div>
                            <template x-if="section.className === 'section yellow'">
                                <div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtítulo:</label>
                                        <input type="text" id="subtitle" x-model="section.subtitle" name="subtitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="details">Detalles:</label>
                                        <textarea id="details" x-model="section.details" name="details"></textarea>
                                    </div>
                                </div>
                            </template>
                            <template x-if="section.className === 'section blue'">
                                <div>
                                    <h3>Personas</h3>
                                    <template x-for="(person, index) in section.persons" :key="index">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" x-model="person.name" placeholder="Nombre de la persona">
                                            <label>Rol:</label>
                                            <input type="text" x-model="person.role" placeholder="Rol de la persona">
                                        </div>
                                    </template>
                                    <button type="button" @click="addPerson(section)">Añadir Persona</button>
                                </div>
                            </template>
                            <template x-if="section.className === 'section green'">
                                <div>
                                    <h3>Recursos</h3>
                                    <template x-for="(resource, index) in section.resources" :key="index">
                                        <div class="form-group">
                                            <label>Nombre del recurso:</label>
                                            <input type="text" x-model="resource.name" placeholder="Nombre del recurso">
                                            <label>Tipo de recurso:</label>
                                            <input type="text" x-model="resource.type" placeholder="Tipo de recurso (imagen, video)">
                                        </div>
                                    </template>
                                    <button type="button" @click="addResource(section)">Añadir Recurso</button>
                                </div>
                            </template>
                            <template x-if="section.className === 'section yellow'">
                                <div>
                                    <h3>Botones</h3>
                                    <template x-for="(button, index) in section.buttons" :key="index">
                                        <div class="form-group">
                                            <label>Etiqueta del botón:</label>
                                            <input type="text" x-model="button.label" placeholder="Etiqueta del botón">
                                            <label>Enlace del botón:</label>
                                            <input type="text" x-model="button.link" placeholder="Enlace del botón">
                                        </div>
                                    </template>
                                    <button type="button" @click="addButton(section)">Añadir Botón</button>

                                    <h3>Recursos</h3>
                                    <template x-for="(resource, index) in section.resources" :key="index">
                                        <div class="form-group">
                                            <label>Nombre del recurso:</label>
                                            <input type="text" x-model="resource.name" placeholder="Nombre del recurso">
                                            <label>Tipo de recurso:</label>
                                            <input type="text" x-model="resource.type" placeholder="Tipo de recurso (imagen, video)">
                                        </div>
                                    </template>
                                    <button type="button" @click="addResource(section)">Añadir Recurso</button>
                                </div>
                            </template>

                        </form>
                    </div>
                </template>
            </div>

            <div id="sections-container" class="static-section">
                <template x-for="section in finalizedSections" :key="section.id" reverse>
                    <div :id="'static-section-' + section.id" :class="section.className" class="section">
                        <h2 class="title" x-text="section.title"></h2>
                        <p class="content" x-text="section.content"></p>
                        <div class="json-output">
                            <strong>JSON Data:</strong>
                            hola
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        function dynamicContent() {
            return {
                sections: [],
                finalizedSections: [],
                addSection(type) {
                    if (this.sections.length > 0) {
                        const lastSection = this.sections[this.sections.length - 1];
                        const inputs = document.querySelectorAll(`#section-${lastSection.id} input, #section-${lastSection.id} textarea`);

                        let isValid = true;
                        inputs.forEach(input => {
                            if (input.value.trim() === '') {
                                isValid = false;
                                input.focus();
                            }
                        });

                        if (!isValid) {
                            Swal.fire({
                                position: "top-end",
                                title: "Advertencia",
                                text: "Debe completar la sección anterior antes de agregar una nueva.",
                                icon: "warning",
                                showConfirmButton: true,
                                confirmButtonText: "Entendido",
                                scrollbarPadding: false,
                                heightAuto: false,
                                backdrop: false,
                                customClass: {
                                    popup: 'swal-alert-warning',
                                    title: 'swal-title-overlay',
                                    content: 'swal-content-overlay',
                                    confirmButton: 'swal-confirm-button-warning'

                                },
                                didOpen: () => {
                                    document.body.classList.add('swal-open');
                                },
                                willClose: () => {
                                    document.body.classList.remove('swal-open');
                                }
                            });
                            return;
                        }

                        this.finalizeSection(this.sections[0]);
                    }

                    let section = {
                        id: Date.now(),
                        title: '',
                        content: '',
                        className: '',
                        inputId: '',
                        persons: [],
                        resources: [],
                        buttons: []
                    };

                    if (type === 'persona') {
                        section.title = 'Persona';
                        section.content = 'persona...';
                        section.className = 'section blue';
                        section.inputId = 'nombrePersona' + section.id;
                    } else if (type === 'galeria') {
                        section.title = 'Galería';
                        section.content = 'galería...';
                        section.className = 'section green';
                        section.inputId = 'nombreGaleria' + section.id;
                    } else if (type === 'portada') {
                        section.title = 'Portada';
                        section.content = 'portada...';
                        section.className = 'section yellow';
                        section.inputId = 'nombrePortada' + section.id;

                        section.subtitle = '';
                        section.details = '';
                    }

                    this.sections.push(section);

                    this.$nextTick(() => {
                        const newSection = document.querySelector(`#section-${section.id} input`);
                        if (newSection) {
                            newSection.focus();
                        }
                    });
                },
                finalizeSection(section) {
                    this.finalizedSections.unshift(section);
                    this.sections = this.sections.filter(s => s.id !== section.id);
                },
                addPerson(section) {
                    section.persons.push({ name: '', role: '' });
                    this.$nextTick(() => {
                        const inputs = document.querySelectorAll(`#section-${section.id} input`);
                        if (inputs.length > 0) {
                            inputs[inputs.length - 2].focus();
                        }
                    });
                },
                addResource(section) {
                    section.resources.push({ name: '', type: '' });
                    this.$nextTick(() => {
                        const inputs = document.querySelectorAll(`#section-${section.id} input`);
                        if (inputs.length > 0) {
                            inputs[inputs.length - 2].focus();
                        }
                    });
                },
                addButton(section) {
                    section.buttons.push({ label: '', link: '' });
                    this.$nextTick(() => {
                        const inputs = document.querySelectorAll(`#section-${section.id} input`);
                        if (inputs.length > 0) {
                            inputs[inputs.length - 2].focus();
                        }
                    });
                }
            }
        }
    </script>

@endpush
