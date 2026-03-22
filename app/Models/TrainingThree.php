<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingThree extends Model
{
    use HasFactory;

    protected $table = 'number_three_air_observers_school';
    
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
