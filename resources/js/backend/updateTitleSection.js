(() => {
    // updateTitleSection.js
    document.addEventListener("DOMContentLoaded", () => {
        // Escuchar eventos de Livewire para actualizar la UI cuando sea necesario
        Livewire.on("titleUpdated", (sectionId) => {
            // Aquí puedes añadir cualquier lógica adicional después de actualizar
        });
    });

    // updateTitleSection.js
    window.toggleEditMode = function (sectionId) {
        document.getElementById(`editMode-${sectionId}`).style.display = "flex";
        document.getElementById(`viewMode-${sectionId}`).style.display = "none";
    };

    window.saveChanges = function (sectionId) {
        const titleInput = document.getElementById(
            `titleInput-${sectionId}`
        ).value;

        // Obtener el componente Livewire específico
        const component = Livewire.find(
            document
                .getElementById(`titleInput-${sectionId}`)
                .closest("[wire\\:id]")
                .getAttribute("wire:id")
        );

        // Llamar al método del componente para guardar en la base de datos
        component.call("saveTitle", titleInput);

        // Actualizar la interfaz
        document.getElementById(`editMode-${sectionId}`).style.display = "none";
        document.getElementById(`viewMode-${sectionId}`).style.display = "flex";
        document.getElementById(`titleDisplay-${sectionId}`).textContent =
            titleInput;
    };

    window.updateLivewireValue = function (event, sectionId) {
        // Esta función ahora solo actualizará el valor en el input
        // sin enviar nada a la base de datos
        const titleInput = event.target.value;
        document.getElementById(`titleInput-${sectionId}`).value = titleInput;
    };
})();
