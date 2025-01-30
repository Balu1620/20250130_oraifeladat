<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trooper extends Model
{
    /** @use HasFactory<\Database\Factories\TrooperFactory> */
    use HasFactory;

    protected $fillable =[
        'name','type','helmet', 'gun'
    ];
}
