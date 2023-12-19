<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [

        'type', 'title', 'region', 'city', 'description', 'url', 'phone', 'email'
    ];

    use HasFactory;
}
