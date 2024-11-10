<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image',
        'status',
        'section_id', // Relación con la sección
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'section_type_id');
    }
}