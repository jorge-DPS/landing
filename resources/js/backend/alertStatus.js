document.addEventListener('DOMContentLoaded', () => {
    Livewire.on('showAlert', (data) => {
        console.log(data[0].title);
        
        Swal.fire({
            icon: data[0].icon,
            title: data[0].title,
            text: data[0].message,
          });
    });
});
