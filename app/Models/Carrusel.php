<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
    use HasFactory;
    protected $table = 'carrusel';
    protected $fillable = [
        'small_title',
        'big_title',
        'description',
        'primary_button',
        'secondary_button',
        'mobile_background',
        'desktop_background',
        'tablet_background',
        'others',
        'status'
    ];
}
