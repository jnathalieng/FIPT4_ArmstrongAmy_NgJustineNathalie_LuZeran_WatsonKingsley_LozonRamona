<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\EventImage;
use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    public function index() 
    {
        // orders events - upcoming events first
        $events = Events::with('images')
            ->orderBy('events_start_datetime', 'asc')
            ->get();
        return response()->json($events);

    }
    
    public function show($id)
    {
        // fetch a single event by it's ID
        $event = Events::findOrFail($id);

        return response()->json($event->load('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'events_title' => 'required|string|max:255',
            'events_description' => 'required|string',
            'events_start_datetime' => 'required|date',
            'events_category' => 'required|string',
            'events_image_1' => 'nullable|image|max:5120',
            'events_image_2' => 'nullable|image|max:5120',
            'events_image_3' => 'nullable|image|max:5120',
        ]);

        $event = Events::create([
            'events_title' => $request->events_title,
            'events_description' => $request->events_description,
            'events_start_datetime' => $request->events_start_datetime,
            'events_end_datetime' => $request->events_end_datetime,
            'events_timezone' => $request->events_timezone,
            'events_category' => $request->events_category,
            'events_status' => $request->events_status,
        ]);

                foreach ([1,2,3] as $slot) {
            if ($request->hasFile("events_image_$slot")) {

                $file = $request->file("events_image_$slot");

                $path = $file->store('events', 'public');

                EventImage::create([
                    'event_id' => $event->id,
                    'path' => $path,
                    'alt_text' => $request->input("events_image_alt_$slot"),
                    'is_featured' => $slot === 1,
                    'order' => $slot
                ]);
            }
        }

        return response()->json($events->load('images'));
    }

    public function update(Request $request, $id)
    {
    $event = Events::findOrFail($id);
    $event->update([
        'events_title' => $request->events_title,
        'events_description' => $request->events_description,
        'events_start_datetime' => $request->events_start_datetime,
        'events_end_datetime' => $request->events_end_datetime,
        'events_timezone' => $request->events_timezone,
        'events_category' => $request->events_category,
        'events_status' => $request->events_status,
    ]);

foreach ([1,2,3] as $slot) {

    $existing = $event->images()->where('order', $slot)->first();

    // REMOVE IMAGE
    if ($request->input("events_image_remove_$slot") && $existing) {
        Storage::disk('public')->delete($existing->path);
        $existing->delete();
        continue;
    }

    // NEW IMAGE UPLOAD
    if ($request->hasFile("events_image_$slot")) {

        if ($existing) {
            Storage::disk('public')->delete($existing->path);
            $existing->delete();
        }

        $path = $request->file("events_image_$slot")->store('events', 'public');

        EventImage::create([
            'event_id' => $event->id,
            'path' => $path,
            'alt_text' => $request->input("events_image_alt_$slot"),
            'is_featured' => $slot === 1,
            'order' => $slot
        ]);

        continue;
    }

    // ALT TEXT ONLY
    if ($existing) {
        $existing->update([
            'alt_text' => $request->input("events_image_alt_$slot")
        ]);
    }
}

    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);

        foreach ($event->images as $image) {
            Storage::disk('public')->delete($image->path);
        }

        $event->delete();

        return response()->json(['message' => 'You have successfully deleted this event.']);
    }

}
