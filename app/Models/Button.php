<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'url',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function buttonable()
    {
        return $this->morphTo();
    }
}
