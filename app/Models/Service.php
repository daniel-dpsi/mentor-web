<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [

        'user_id','type', 'title', 'region', 'municipality', 'city', 'description', 'url', 'phone', 'email'
    ];

    use HasFactory;
}
