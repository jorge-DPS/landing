(() => {
    document.addEventListener('DOMContentLoaded', () => {
        Livewire.on('showActivityDelete', (activity) => {
            console.log(activity);
            // delete-activity 
            Swal.fire({
                title: "¿Eliminar Actividad?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, ¡Eliminar!",
                cancelButtonText: "Cancelar"
              }).then((result) => {
                if (result.isConfirmed) {
                    // eliminar
                    Livewire.dispatch('delete-activity', { activity: activity })
                  Swal.fire({
                    title: "Se elimino la actividad",
                    text: "Eliminado correctamente",
                    icon: "success"
                  });
                }
              });
            
        })
    });
})();
