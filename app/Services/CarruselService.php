<?php

namespace App\Services;

use App\Models\Button;
use App\Models\Carrusel;
use App\Repositories\CarruselRepository;

class CarruselService
{
    protected $repository;

    public function __construct(CarruselRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCarrusel()
    {
        return $this->repository->getAll();
    }

    public function getCarrusel($id)
    {
        return $this->repository->getById($id);
    }

    public function createCarrusel(array $data): Carrusel
    {
        //dd($data);
        // Manejo de archivos
        if (isset($data['mobile_background']) && $data['mobile_background'] instanceof \Illuminate\Http\UploadedFile) {
            $data['mobile_background'] = saveStorage($data['mobile_background'], 'mobile_backgrounds');
        }

        if (isset($data['desktop_background']) && $data['desktop_background'] instanceof \Illuminate\Http\UploadedFile) {
            $data['desktop_background'] = saveStorage($data['desktop_background'], 'desktop_backgrounds');
        }

        if (isset($data['tablet_background']) && $data['tablet_background'] instanceof \Illuminate\Http\UploadedFile) {
            $data['tablet_background'] = saveStorage($data['tablet_background'], 'tablet_backgrounds');
        }

        $carrusel = $this->repository->create($data);

        //dd($carrusel);

        if (isset($data['buttons']) && is_array($data['buttons'])) {
            foreach ($data['buttons'] as $buttonData) {
           //     if(isset($buttonData['name'] ) )
                $carrusel->buttons()->create([
                    'text' => $buttonData['name']??'',
                    'url' => $buttonData['link']??'',
                    'status' => true,
                ]);

            }
        }

        return $carrusel;

    }

    public function updateCarrusel(Carrusel $carrusel, array $data): bool
    {
        return $this->repository->update($carrusel, $data);
    }

    public function deleteCarrusel(Carrusel $carrusel): bool
    {
        return $this->repository->delete($carrusel);
    }

}
