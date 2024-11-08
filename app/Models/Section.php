<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections_public';

    protected $fillable = [
        'title',
        'section_type_id',
        'page_id'
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'section_id', 'section_type_id');
    }
}