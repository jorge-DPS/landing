<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
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

    public function sections()
    {
        return $this->hasMany(Section::class, 'page_id')->orderBy('order');
    }


}
