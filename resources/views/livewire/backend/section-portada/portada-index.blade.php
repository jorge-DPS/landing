<div>
    <!-- Imagen -->
    <div class="flex flex-col items-center mt-5">
        <label class="text-gray-900 text-lg font-semibold mb-3">Imagen Actual</label>
        <div class="w-full max-w-sm">
            <img src="{{ asset('storage/cover/images' . '/' . $cover->image) }}" alt="{{ 'image cover: ' . $cover->title }}" class="rounded-md shadow-lg border border-gray-300">
        </div>
    </div>

    <div class="card-body lg:py-7.5 py-5">
        <!-- Título -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Título</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->title }}</div>
            </div>
        </div>

        <!-- Subtítulo -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Subtítulo</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->subtitle }}</div>
            </div>
        </div>

        <!-- Descripción -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Descripción</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->description }}</div>
            </div>
        </div>

        <!-- Estado -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Estado</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->status == 1 ? 'Activo' : 'Inactivo' }}</div>
            </div>
        </div>

        <!-- Botón de texto -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Texto del botón</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->button_text }}</div>
            </div>
        </div>

        <!-- URL del botón -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">URL del botón</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->button_url }}</div>
            </div>
        </div>

        <!-- Abrir en nueva pestaña -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Abrir en nueva pestaña</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->open_in_new_tab == 1 ? 'Sí' : 'No' }}</div>
            </div>
        </div>

        <!-- Posición de la Imagen -->
        <div class="flex flex-wrap md:flex-nowrap gap-5 lg:gap-14 mt-5">
            <div class="flex flex-col max-w-72 w-full">
                <label class="text-gray-900 text-sm font-semibold">Posición de la imagen</label>
            </div>
            <div class="w-full">
                <div class="bg-gray-50 text-gray-900 border border-gray-300 rounded-md p-3 shadow-sm">{{ $cover->image_position == 'left' ? 'Izquierda' : 'Derecha' }}</div>
            </div>
        </div>
    </div>
</div>
