<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    // Autoriser la création en masse des champs nécessaires
    protected $fillable = ['exercise', 'sets', 'reps', 'weight', 'date'];
}
