<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    //
    public function index() 
    {
        // orders events - upcoming events first
        $events = Events::orderBy('events_start_datetime', 'asc')->get();

        return response()->json($events);
    }
    
}
