<div>
    @forelse ($sections as $section)
        @switch($section->section_type_id)
            @case(1)
                <livewire:frontend.page.sections.employees :section="$section" :page="$page" />
                {{-- @if ($section->employees->isEmpty())
                <p>No hay empleados para esta sección. Agrega algunos empleados.</p>
                @endif --}}
            @break

            @case(2)
                <livewire:frontend.page.sections.images :section="$section" />
            @break

            @case(3)
                <livewire:frontend.page.sections.cover :section="$section" />
            @break

            @default
        @endswitch
        @empty
            <div>
                No hay Secciones que mostrar
            </div>
        @endforelse

    </div>
