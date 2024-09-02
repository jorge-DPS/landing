<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'name',
        'position',
        'image',
        'status',
        'person_section_id',
    ];

    public function personSection()
    {
        return $this->belongsTo(PersonSection::class);
    }
}
