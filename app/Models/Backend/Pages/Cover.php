<?php

namespace App\Models\Backend\Pages;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cover extends Model
{
    //
    use SoftDeletes;  // Habilita SoftDeletes
    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'section_id', 
        'title', 
        'subtitle', 
        'description', 
        'image', 
        'status', 
        'button_text', 
        'button_url', 
        'open_in_new_tab', 
        'image_position'
    ];

    // Relación con la sección (uno a uno)
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
