<?php

/**
 * Guarda un archivo en un directorio específico dentro del sistema de archivos de la aplicación.
 *
 * Esta función genera automáticamente un nombre único para el archivo basado en la fecha y hora actuales,
 * y lo guarda en la carpeta especificada dentro del directorio 'dataSaintGeorge/'.
 *
 * @param \Illuminate\Http\UploadedFile $file El archivo que se desea guardar.
 * @param string $folder El nombre de la carpeta dentro de 'dataSaintGeorge/' donde se almacenará el archivo.
 * @return string La ruta completa del archivo guardado.
 */
function saveStorage($file, $folder)
{
    // Construye la ruta de destino concatenando el prefijo 'dataSaintGeorge/' con el nombre de la carpeta proporcionada
    $destinationPath = 'dataSaintGeorge/' . $folder . '/';

    // Genera un nombre único para el archivo utilizando la fecha y hora actuales
    // Se obtiene la extensión original del archivo y se le añade al nuevo nombre
    $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();

    // Mueve el archivo desde su ubicación temporal a la carpeta de destino con el nuevo nombre
    $file->move($destinationPath, $profileImage);

    // Construye la ruta completa del archivo recién guardado
    $path_new_image = $destinationPath . $profileImage;

    // Devuelve la ruta completa del archivo guardado
    return $path_new_image;
}
