<?php

namespace App\Models\Backend\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityImage extends Model
{
    //

    use HasFactory;

    protected $table = 'activity_images'; // Nombre de la tabla en plural

    protected $fillable = [
        'activity_id',
        'image_url',
        'thumbnail_url',
    ];

    /**
     * Relación: Cada imagen pertenece a una actividad.
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
