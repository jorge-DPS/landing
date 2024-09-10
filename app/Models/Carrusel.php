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
        'mobile_background',
        'desktop_background',
        'tablet_background',
        'status'
    ];

    public function buttons()
    {
        return $this->morphMany(Button::class, 'buttonable');
    }
}
