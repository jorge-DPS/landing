<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'seo_title',
        'menu_id',
        'slug', 
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
