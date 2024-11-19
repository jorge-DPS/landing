(() => {
    const selectedIds = new Set(); // Maneja IDs únicos
    const buttons = document.querySelectorAll('[data-delete]');
    const deleteButton = document.getElementById('deleteSelected');

    const toggleDeleteButton = () => {
        if (selectedIds.size > 0) {
            deleteButton.removeAttribute('disabled');
        } else {
            deleteButton.setAttribute('disabled', true);
        }
    };

    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();

            const imageContainer = button.closest('.group');
            const imageId = imageContainer.getAttribute('data-id');

            // Alternar selección
            if (imageContainer.classList.contains('selected')) {
                imageContainer.classList.remove('selected');
                selectedIds.delete(imageId);
            } else {
                imageContainer.classList.add('selected');
                selectedIds.add(imageId);
            }

            // Cambiar el texto del botón
            button.textContent = imageContainer.classList.contains('selected') ? 'Seleccionado' : 'Eliminar';

            // Actualizar el estado del botón "Eliminar Seleccionados"
            toggleDeleteButton();

            // Mostrar los IDs seleccionados en la consola
            console.log(`IDs seleccionados:`, Array.from(selectedIds));
        });
    });

    // Enviar los IDs seleccionados al controlador de Livewire
    deleteButton.addEventListener('click', () => {
        if (selectedIds.size > 0) {
            // console.log('IDs para enviar:', [Array.from(selectedIds)]); // Verificar el contenido de ids
            Livewire.dispatch('deleteSelectedImages', [Array.from(selectedIds)]); // Enviar los IDs a Livewire
        } else {
            alert('No hay imágenes seleccionadas');
        }
    });
})();
