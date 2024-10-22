<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller 
{
    public function create(){
        return view('create_event');
    }

    public function addevent(Request $request){

        $event = new Event;
 
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->event_date = $request->eventdate;
        $event->start_time = $request->start;
        $event->end_time = $request->end;
        $event->user_id = auth()->user()->id;
 
        $event->save();

        return redirect('/all-events');
    }

    public function listallevents(){
        // $events = Event::where('user_id', auth()->user()->id)::all();
        $events = Event::all();
        return view("list_all_event")->with('events', $events);
    }
}