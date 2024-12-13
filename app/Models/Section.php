<?php

namespace App\Models;

use App\Models\Page;
use App\Models\Employee;
use App\Models\Backend\Pages\Cover;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sections_public';

    protected $fillable = [
        'title',
        'section_type_id',
        'page_id',
        'status',  // Añadir el campo 'status' aquí
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function employees()
    {
        // Relación: un 'section' puede tener muchos 'employees' relacionados
        return $this->hasMany(Employee::class, 'section_id', 'id');
    }

    // Relación con la portada (uno a uno)
    public function cover()
    {
        return $this->hasOne(Cover::class, 'section_id', 'id');
    }
}