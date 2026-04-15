<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

public function images()
{
    return $this->hasMany(EventImage::class, 'event_id');
}

    protected $fillable = [
        'events_title',
        'events_description',
        'events_start_datetime',
        'events_end_datetime',
        'events_timezone',
        'events_category',
        'events_status',
    ];
}
