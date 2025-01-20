<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    //
    public function showEvents (Event $events) {
        $events =  Event::latest()->get();

        return view('pages.events.index', [ 'events' => $events ]);
    }

    public function viewEvents (Event $event) {
        return view('pages.events.event');
    }
}
