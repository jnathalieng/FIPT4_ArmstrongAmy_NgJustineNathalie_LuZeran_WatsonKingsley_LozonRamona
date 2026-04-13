<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $fillable = [
        'events_title',
        'events_description',
        'events_start_datetime',
        'events_end_datetime',
        'events_timezone',
        'events_category',
        'events_status',
        'events_image_1',
        'events_image_alt_1',
        'events_image_2',
        'events_image_alt_2',
        'events_image_3',
        'events_image_alt_3',
    ];
}
