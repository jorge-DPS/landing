(() => {
    document.addEventListener('DOMContentLoaded', () => {
        // Delegación de eventos: selecciona el contenedor principal de las tarjetas
        const container = document.querySelector('.grid');

        // Delegar el evento de clic
        container.addEventListener('click', (event) => {
            // Verifica si el clic fue en un botón con la clase "delete-employee"
            const button = event.target.closest('.delete-employee');

            if (button) {
                // Obtén el ID del empleado desde el atributo "data-employee-id"
                const employeeId = button.getAttribute('data-employee-id');

                // SweetAlert para confirmar la eliminación
                Swal.fire({
                    title: '¿Eliminar Empleado?',
                    text: "Esta acción no se puede deshacer.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Lógica para llamar a Livewire o hacer algo con el ID del empleado
                        Livewire.dispatch('eliminar-empleado', { employeeId });

                        // Mostrar notificación de éxito
                        Livewire.on('empleado-eliminado', () => {
                            Swal.fire(
                                'Eliminado',
                                'El empleado ha sido eliminado.',
                                'success'
                            );
                        });
                    }
                });
            }
        });
    });
})();
