<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingFour extends Model
{
    use HasFactory;

    protected $table = 'number_four_air_observers_school';
    
    protected $fillable = [
        'user_id',
        'rank',
        'name',
        'picture',
        'info',
        'unit',
        'date',
        'aircraft',
        'incident',
        'location',
        'details'
    ];
}