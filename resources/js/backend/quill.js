// import Quill from 'quill';
// import 'quill/dist/quill.snow.css';

// document.addEventListener('DOMContentLoaded', () => {
//     const quillEditor = new Quill('#quill-editor', {
//         theme: 'snow',
//         modules: {
//             toolbar: [
//                 [{ header: [1, 2, false] }],
//                 ['bold', 'italic', 'underline', 'strike'],
//                 [{ list: 'ordered' }, { list: 'bullet' }],
//                 ['link', 'image'],
//                 ['clean']
//             ]
//         }
//     });

//     // Sincroniza el contenido del editor con Livewire
//     const hiddenInput = document.getElementById('description');

//     quillEditor.on('text-change', () => {
//         const htmlContent = quillEditor.root.innerHTML;

//         // Actualiza el textarea oculto
//         hiddenInput.value = htmlContent;

//         // Notifica a Livewire sobre el cambio en la propiedad
//         if (window.Livewire) {
//             hiddenInput.dispatchEvent(new Event('input')); // Simula un evento "input" para actualizar Livewire
//         }
//     });

//     // Inicializa el contenido del editor con la propiedad actual de Livewire
//     if (window.Livewire) {
//         Livewire.hook('message.processed', () => {
//             const currentContent = hiddenInput.value;
//             if (quillEditor.root.innerHTML !== currentContent) {
//                 quillEditor.root.innerHTML = currentContent;
//             }
//         });
//     }
// });

// aquiii:::::: 
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

document.addEventListener('DOMContentLoaded', () => {
    const quillEditor = new Quill('#quill-editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Sincroniza el contenido del editor con Livewire
    const hiddenInput = document.getElementById('description');

    quillEditor.on('text-change', () => {
        const htmlContent = quillEditor.root.innerHTML;

        // Actualiza el textarea oculto
        hiddenInput.value = htmlContent;

        // Notifica a Livewire sobre el cambio en la propiedad
        if (window.Livewire) {
            hiddenInput.dispatchEvent(new Event('input')); // Simula un evento "input" para actualizar Livewire
        }
    });

    // Cargar contenido inicial desde Livewire
    if (hiddenInput.value) {
        quillEditor.root.innerHTML = hiddenInput.value;
    }

    // Escuchar cambios desde Livewire (por ejemplo, al actualizar el estado)
    if (window.Livewire) {
        Livewire.hook('message.processed', () => {
            const currentContent = hiddenInput.value;
            if (quillEditor.root.innerHTML !== currentContent) {
                quillEditor.root.innerHTML = currentContent;
            }
        });
    }
});