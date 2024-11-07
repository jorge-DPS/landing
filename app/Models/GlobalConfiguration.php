<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalConfiguration extends Model
{
    use HasFactory;

    protected $table = 'global_configuration';

    protected $fillable = [
        'carrusel_time',
    ];
}
