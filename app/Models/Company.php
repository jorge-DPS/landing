<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';

    protected $fillable = [
        'company_name',
        'owner_name',
        'description',
        'phone',
        'mobile',
        'address',
        'big_logo',
        'small_logo',
        'dark_logo',
        'light_logo',
        'state',
    ];

    public function socialMedia()
    {
        return $this->morphMany(SocialMedia::class, 'socialable');
    }
}

