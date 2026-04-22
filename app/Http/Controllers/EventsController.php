<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\EventImage;
use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    public function index() 
    {
        // orders events - upcoming events first
        $events = Events::with('images')
            ->orderBy('events_start_datetime', 'asc')
            ->get();

        //new method
        return response()->json($events->map(fn($event) => $this->formatEventResponse($event)));

        //old method    
        //return response()->json($events);

    }
    
    public function show($id)
    {
        // fetch a single event by it's ID
        $event = Events::findOrFail($id);

        //old method
        //return response()->json($event->load('images'));

        //new method
        return response()->json($this->formatEventResponse($event->load('images')));
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
                $filename = time() . '_' . $slot . '_' . $file->getClientOriginalName();
                //new method
                $file->move(public_path('images/event-images'), $filename);

                //old method
                // $path = $file->store('events', 'public');

                EventImage::create([
                    'event_id' => $event->id,

                    //old method
                    //'path' => $path,

                    //new method
                    'path' => $filename,

                    'alt_text' => $request->input("events_image_alt_$slot"),
                    'is_featured' => $slot === 1,
                    'order' => $slot
                ]);
            }
        }

        //old method
        // return response()->json($event);

        //new method
       return response()->json($this->formatEventResponse($event->load('images')));
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

    // REMOVE IMAGE - old method
    // if ($request->input("events_image_remove_$slot") && $existing) {
    //     Storage::disk('public')->delete($existing->path);
    //     $existing->delete();
    //     continue;
    // }

    //REMOVE IMAGE - new method
        if ($request->input("events_image_remove_$slot") && $existing) {
            $imagePath = public_path('images/event-images/' . $existing->path);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $existing->delete();
            continue;
        }

    // NEW IMAGE UPLOAD
    if ($request->hasFile("events_image_$slot")) {

        //new method
        if ($request->input("events_image_remove_$slot") && $existing) {
        $imagePath = public_path('images/event-images/' . $existing->path);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $existing->delete();
        continue;
    }
        //old method
        if ($existing) {Storage::disk('public')->delete($existing->path);$existing->delete();}
        $path = $request->file("events_image_$slot")->store('events', 'public');

        EventImage::create([
            'event_id' => $event->id,
            
            //old method
            //'path' => $path,

            //new method
            'path' => $filename,
            
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
//new method
return response()->json($this->formatEventResponse($event->load('images')));
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);

        //new method
        foreach ($event->images as $image) {
        $imagePath = public_path('images/event-images/' . $image->path);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }

        //old method
        //foreach ($event->images as $image) {Storage::disk('public')->delete($image->path);}

        $event->delete();

        return response()->json(['message' => 'You have successfully deleted this event.']);
    }

        //Format event response with correct image paths
    private function formatEventResponse(Events $event)
    {
        $data = $event->toArray();
        
        // Convert image paths to full URLs
        if (isset($data['images']) && is_array($data['images'])) {
            $data['images'] = collect($data['images'])->map(function ($image) {
                $image['path'] = asset('images/event-images/' . $image['path']);
                return $image;
            })->toArray();
        }
        
        return $data;
    }


}
