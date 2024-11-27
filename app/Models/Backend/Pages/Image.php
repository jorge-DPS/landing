<?php

namespace App\Models\Backend\Pages;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
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
