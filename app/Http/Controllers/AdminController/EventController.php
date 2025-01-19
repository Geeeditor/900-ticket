<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //
    public function create() {
        return view('admin.pages.900Events.create');
    }

    public function store(Request $request, Event $event) {

        // Checking if user is a usertype of admin before requesting or validating a data

        if (Auth::user()->usertype === 'admin') {
        $request->validate(
            [
                'title' => ['required', 'max:225'],
                'date' => ['required', 'date'],
                'time' => 'required|date_format:H:i',
                'location' => ['required', 'max:225'],
                'description' => ['required'],
                'hero_image' => ['required' ,'image', 'max:2048'],
                'map_link' => ['required','url'],
                'ticket_price' => ['required' ,'numeric']
            ]
            );

            if ($request->hasFile('hero_image')) {
                $heroImage = $request->file('hero_image');
                $heroImagePath = 'events/' . time() . '_' . $heroImage->getClientOriginalName();
                Storage::disk('public')->put($heroImagePath,file_get_contents($heroImage));
            }

            // dd('Event Validated');
            $admin = Auth::user(); //  using Laravel's authentication

                // Create the event with the associated admin
                $event = $admin->events()->create([
                    'title' => $request->title,
                    'date' => $request->date,
                    'time' => $request->time,
                    'location' => $request->location,
                    'description' => $request->description,
                    'hero_image' => $heroImagePath, // Save the path to the image
                    'map_link' => $request->map_link,
                    'ticket_price' => $request->ticket_price
                ]);

                return redirect()->back()->with('success', 'You successfully created an Event. Visit event page to view created event');

            } else {
        // If the user is not an admin, you can redirect them back or show an error message
                return redirect()->back()->with('error', 'Opps!!!  You do not have permission to create events');
            }

    }

    public function view(Event $event) {
        $event = Event::latest()->get();
        return view('admin.pages.900Events.view', ['events' => $event]);
    }

    public function show(Event $event, $id) {
        $event = Event::find($id);

        return view('admin.pages.900Events.show', ['event' => $event]);
    }

}
