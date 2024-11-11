<div class="flex items-center gap-2.5">

    <div class="modal modal-dialog modal-center max-w-[600px]" data-modal="true" data-modal-backdrop="false"
        data-modal-persistent="true" id="uploadImagesModal">
        <div class="modal-content shadow-lg"
            style="background: #ffffff; border: 3px solid rgba(177,42,56,0.37); border-radius: 10px;">

            <div class="modal-header">
                <h3 class="modal-title">
                    Subir Imágenes
                </h3>
                <button class="btn btn-xs btn-icon btn-danger" data-modal-dismiss="true">
                    <i class="ki-outline ki-cross"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadImagesForm" method="POST" action="{{ route('images.store', ['page' => $page, 'section' => $section]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full mt-2 mb-2">
                        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <label class="form-label max-w-32">
                                Selecciona Imágenes
                            </label>
                            <div class="flex flex-col w-full gap-1">
                                <input id="images" class="input" name="images[]" type="file" multiple accept="image/*" />
                                <span class="form-hint text-gray-500">
                                    Puedes seleccionar varias imágenes.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-primary" type="submit">
                            Subir
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
