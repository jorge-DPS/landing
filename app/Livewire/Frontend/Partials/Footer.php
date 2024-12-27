<?php

namespace App\Livewire\Frontend\Partials;

use App\Models\Company;
use App\Models\Page;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $company = Company::with('socialMedia')->first();
        $pages = Page::get();
        $redes = $company->socialMedia->map(function ($socialMedia) {
            // Convierte el nombre a minúsculas
            $socialMedia->platform = strtolower($socialMedia->platform);
        
            // Asigna la clase del ícono según el nombre
            $iconClasses = [
                'facebook' => 'fa-facebook-f',
                'twitter' => 'fa-x-twitter',
                'linkedin' => 'fa-linkedin-in',
                'youtube' => 'fa-youtube',
            ];
        
            // Busca el ícono basado en el nombre en minúsculas
            $socialMedia->icon_class = $iconClasses[$socialMedia->platform] ?? 'fa-question-circle'; // Ícono por defecto
            return $socialMedia;
        });

        // dd($redes);

        return view('livewire.frontend.partials.footer', [
            'company' => $company,
            'pages' => $pages,
            'redes' => $redes,
        ]);
    }
}
