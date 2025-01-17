import Calendar from "@toast-ui/calendar";
import "@toast-ui/calendar/dist/toastui-calendar.min.css"; // Stylesheet for calendar

(() => {
    document.addEventListener("DOMContentLoaded", () => {
        const container = document.getElementById("calendar");

        // Obtener los datos del atributo data
        const activities = JSON.parse(container.dataset.activities || '[]');
        console.log(activities);
        

        // Formatear solo el mes y año en español
        const formatter = new Intl.DateTimeFormat('es', {
            month: 'long',
            year: 'numeric'
        });

        // Crear el contenedor del calendario
        const monthDisplay = document.getElementById("current-month"); // Elemento donde mostraremos el mes

        const options = {
            defaultView: "month", // Cambiar a 'month' para mostrar un mes a la vez
            isReadOnly: true, // Deshabilita la edición

            timezone: {
                zones: [
                    {
                        timezoneName: "America/La_Paz", // Zona horaria de Bolivia
                        displayLabel: "La Paz",
                    },
                ],
            },

            month: {
                dayNames: [
                    "Domingo",
                    "Lunes",
                    "Martes",
                    "Miércoles",
                    "Jueves",
                    "Vienes",
                    "Sábado",
                ], // Personalización de días
                startDayOfWeek: 1, // Define el inicio de la semana (0 para domingo, 1 para lunes, etc.)
                narrowWeekend: true, // Opcional: ajusta el ancho de los fines de semana
            },

            calendars: [
                {
                    id: "activities",
                    name: "Actividades",
                    backgroundColor: "#03bd9e",
                }
            ],

            template: {
                popupDetailBody: function(event) {
                    return `
                        <div class="event-details">
                            <h3>${event.title}</h3>
                            <p>${event.body}</p>
                            ${event.cover_image ? `<img src="${event.cover_image}" alt="${event.title}" style="max-width: 200px;">` : ''}
                            ${event.attachment ? `<a href="${event.attachment}" target="_blank">${event.attachment_title || 'Ver adjunto'}</a>` : ''}
                        </div>
                    `;
                }
            }
        };

        // instanciamos el calendario
        const calendar = new Calendar(container, options);

        // mostrar el mes y ño actual
        updateMonthDisplay()

        const events = activities.map(activity => ({
            id: activity.id,
            calendarId: 'activities',
            title: activity.name,
            body: activity.description,
            start: activity.start_date,
            end: activity.end_date,
            cover_image: activity.cover_image,
            attachment: activity.attachment,
            attachment_title: activity.attachment_title,
            category: 'allday',
            isReadOnly: true
        }));

        console.log('aqui los eventos', events);
        
        calendar.createEvents(events);
        
        // calendar.createEvents([
        //     {
        //         id: "1",
        //         calendarId: "cal1",
        //         title: "Evento Personal",
        //         category: "allday", // Cambiar a 'allday' para que no muestre hora
        //         dueDateClass: "",
        //         start: "2025-01-14", // Solo la fecha
        //         end: "2025-01-14",   // Solo la fecha
        //     },
        //     {
        //         id: "2",
        //         calendarId: "cal2",
        //         title: "Evento de Trabajo",
        //         category: "allday", // Cambiar a 'allday' para que no muestre hora
        //         dueDateClass: "",
        //         start: "2025-01-14", // Solo la fecha
        //         end: "2025-01-14",   // Solo la fecha
        //     },
        // ]);

        // Función para actualizar el nombre del mes
        function updateMonthDisplay() {
            const date = calendar.getDate();
            const formattedDate = new Date(date);         
            const formattedString = formatter.format(formattedDate);

            monthDisplay.textContent = formattedString;
            console.log(formattedString); // Mostrará por ejemplo: "febrero 2025"
        }

        // Navegar entre meses
        document.getElementById("prev-month").addEventListener("click", () => {
            calendar.prev(); // Cambia al mes anterior
            updateMonthDisplay(); // Actualiza el nombre del mes
        });

        document.getElementById("next-month").addEventListener("click", () => {
            calendar.next(); // Cambia al mes siguiente
            updateMonthDisplay(); // Actualiza el nombre del mes
        });
    });
})();
