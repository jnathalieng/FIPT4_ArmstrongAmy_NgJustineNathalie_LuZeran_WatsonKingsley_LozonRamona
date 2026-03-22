<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comm extends Model
{
    use HasFactory;

    protected $table = 'comm';
    
    protected $fillable = [
        'user_id',
        'name',
        'picture',
        'service_number',
        'rank',
        'corps',
        'unit',
        'age',
        'birth',
        'death',
        'enlist',
        'info',
        'grave'
    ];
}