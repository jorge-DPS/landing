(() => {
// alert('aquiii')
Livewire.on('showAlertCover', (datos) => {
    // El siguiente código es el Alert utilizado
    Swal.fire({
        title: '¿Eliminar Portada?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            // console.log(employee , section);

            Livewire.dispatch('deleteCover', {
                cover: datos.cover,
                section: datos.section
            })
            Swal.fire(
                // eliminar portada
                'Se eliminó el Cover',
                'Eliminado correctamente',
                'success'
            )
        }
    })

})

})();
