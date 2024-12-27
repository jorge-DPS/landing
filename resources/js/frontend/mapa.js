import { Loader } from "@googlemaps/js-api-loader";

const loader = new Loader({
    apiKey: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg",
    version: "weekly",
    libraries: ["places", "marker"],
});

//   -17.752348995838908, -63.16513086188961
const mapOptions = {
    center: {
        lat: -17.752348995838908,
        lng: -63.16513086188961,
    },
    zoom: 18,
};

// Usando importLibrary
async function initMap() {
    try {
      // Importar la librería necesaria
      const { Map } = await loader.importLibrary("maps");
  
      // Crear el mapa
      const map = new Map(document.getElementById("map"), mapOptions);
  
      // Crear un marcador
      const { Marker } = await loader.importLibrary("marker");
      const marker = new Marker({
        position: { lat: -17.752348995838908, lng: -63.16513086188961 }, // Ubicación del marcador
        map: map, // Referencia al mapa donde se agregará el marcador
        title: "Colegio Sain George", // Título que se mostrará al pasar el mouse
      });
  
    } catch (error) {
      console.error("Error al cargar Google Maps API:", error);
    }
  }
  
  initMap();
