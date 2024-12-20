<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionType extends Model
{
    use HasFactory;

    protected $table = 'section_types';

    protected $fillable = [
        'name'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class, 'section_type_id');
    }

}
