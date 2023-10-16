<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function show($id) {

        $event = Event::findOrFail($id);


        return view('events.show', ['event' => $event]);
    }
}
