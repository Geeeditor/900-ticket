<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function showEvents () {
        return view ('pages.events.index');
    }

    public function viewEvents () {
        return view ('pages.events.event');
    }
}
