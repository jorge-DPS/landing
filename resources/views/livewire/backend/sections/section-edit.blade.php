<div class="flex items-center">
    <div class="flex items-center gap-2" id="editMode-{{ $section->id }}" style="display: none;">
        <button class="btn btn-xs btn-icon rounded-full btn-clear btn-success" title="guardar"
            onclick="saveChanges({{ $section->id }})">
            <i class="ki-filled ki-check-circle"></i>
        </button>
        <div>
            <input class="input" placeholder="Título" type="text" id="titleInput-{{ $section->id }}"
                value="{{ $title }}" oninput="updateLivewireValue(event, {{ $section->id }})" />
        </div>
    </div>

    <div class="flex items-center gap-2" id="viewMode-{{ $section->id }}">
        <button class="btn btn-xs btn-icon rounded-full btn-clear btn-info" title="editar"
            onclick="toggleEditMode({{ $section->id }})">
            <i class="ki-filled ki-pencil"></i>
        </button>
        <div id="titleDisplay-{{ $section->id }}">
            {{ $section->title }}
        </div>
    </div>
</div>




@vite('resources/js/backend/updateTitleSection.js')
