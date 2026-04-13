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
    
    public function show($id)
    {
        // fetch a single event by it's ID
        $event = Events::findOrFail($id);

        return response()->json($event);
    }

    public function store(Request $request)
    {
        // creating a new event
        $event = Events::create($request->all());

        return response()->json($event);
    }
}
