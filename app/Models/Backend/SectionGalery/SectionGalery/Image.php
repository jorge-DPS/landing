<?php

namespace App\Models\Backend\SectionGalery\SectionGalery;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
        'section_id', 
        'filename'
    ];

    // Relación inversa con Section
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'section_type_id');
    }
}