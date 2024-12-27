<?php

namespace App\Livewire\Backend\Pages;

use App\Models\Company;
use App\Models\SocialMedia;
use Livewire\Component;

class RedSocial extends Component
{
    public $companies;
    public $company;
    public $platform;
    public $url;

    public function mount()
    {
        // dd($this->companies->id);
        $this->company = Company::find($this->companies->id);

        if (!$this->companies) {
            abort(404, 'Empresa no encontrada');
        }
    }

    public function addSocialMedia()
    {
        // Encuentra la empresa
        $company = Company::find($this->companies->id);
    
        if (!$company) {
            session()->flash('error', 'Empresa no encontrada.');
            return;
        }
    
        // Validar los datos
        $this->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);
    
        // Crea la red social asociada a la empresa
        $company->socialMedia()->create([
            'platform' => $this->platform,
            'url' => $this->url,
        ]);
    
        // Reiniciar los campos del formulario
        $this->reset(['platform', 'url']);
    
        // Mensaje de confirmación
        session()->flash('message', 'Red social añadida exitosamente.');
    }
    
    

    public function render()
    {
        // $redes = SocialMedia::where('socialable_id', $this->companies->id)->where('socialable_type', Company::class)->get();
        // dd($redes);
        $redes = SocialMedia::all();
        
        return view('livewire.backend.pages.red-social', [
            'redes' => $redes,
        ]);
    }
}
