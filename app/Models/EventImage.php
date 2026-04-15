<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{

public function event()
{
    return $this->belongsTo(Events::class);
}

protected $fillable = [
    'event_id',
    'path',
    'alt_text',
    'is_featured',
    'order',
];
}
