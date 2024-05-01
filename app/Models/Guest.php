<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{
    use HasFactory;

    public function getNameAttribute()
    {
        return 'Guest';
    }

    public function getEmailAttribute()
    {
        return 'guest@gmail.com';
    }
}
