<?php

namespace App\Models\Backend\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    //
    use SoftDeletes;  // Habilita SoftDeletes
    use HasFactory;

    /**
     * Nombre de la tabla en la base de datos (opcional si sigue la convención).
     */
    protected $table = 'activities';

    /**
     * Los campos que se pueden llenar de manera masiva.
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'cover_image',
        // 'attachment',
        // 'attachment_title',
    ];

    /**
     * Relación: Una actividad tiene muchas imágenes.
     */
    public function images()
    {
        return $this->hasMany(ActivityImage::class, 'activity_id');
    }
}
