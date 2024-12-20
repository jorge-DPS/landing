<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- {{ $estado }} --}}
    <button wire:click="status" class="btn btn-sm btn-icon btn-clear {{ $estado ? 'btn-success' : 'btn-primary' }}" title="{{ $estado ? "Inactivar" : "Activar" }}" >
        <i class="ki-filled ki-eye{{ $estado ? "" : "-slash"}} text-xl"></i>
    </button>
    
    

</div>
@vite('resources/js/backend/alertStatus.js')
