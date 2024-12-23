<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'banner',
        'name',
        'position',
        'image',
        'status',
        'section_id', // Relación con la sección
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}