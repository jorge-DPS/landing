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

}
