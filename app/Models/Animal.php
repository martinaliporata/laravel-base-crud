<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'species',
        'weight',
        'alimentation',
        'extintion',
        'colour',
        'habitat',
        'life_duration',
    ];
}
