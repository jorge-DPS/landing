<?php

function saveStorage($file, $folder)
{
    $destinationPath = 'dataSaintGeorge/' . $folder . '/';

    if (!file_exists($destinationPath)) {
        $destinationPath;
    }

    $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
    $file->move($destinationPath, $profileImage);
    $path_new_image = $destinationPath . $profileImage;
    return $path_new_image;
}