<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    //
    public function showEvents() {
    $events = Event::latest()->get();
    return view('pages.events.index', ['events' => $events]);
}

    public function viewEvents($id) {
        $events = Event::findOrFail($id);
        return view('pages.events.event', ['id' => $events]);
    }
}
