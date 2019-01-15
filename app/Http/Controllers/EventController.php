<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function callcreate(Request $request)
    {
      return view('createnew'); // passing the $message to record view
    }

    public function create(Request $request)
    {
        $event = new Event();
        $event->eventOwner = $request->eventOwner;
        $event->eventName = $request->eventName;
        $event->eventDate1 = $request->eventDate1;
        $event->eventDate2 = $request->eventDate2;  // What if date is single ?!!!
        $event->eventLocation = $request->eventLocation;
        $event->maxNumParticipants = $request->maxNumParticipants;
        $event->eventDescription = $request->eventDescription;
        $event->save();
        return redirect('/home');
    }

    public function viewrec($id)
    {
        $event = Event::findOrFail($id);
        return view('record', ['event' => $event]); // passing the $message to record view
    }

    public function editrec($id)
    {
        $event = Event::find($id);
        return view('update', ['event' => $event]); // passing the $message to record view
    }
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->eventOwner = $request->eventOwner;
        $event->eventName = $request->eventName;
        $event->eventDate1 = $request->eventDate1;
        $event->eventDate2 = $request->eventDate2;  // What if date is single ?!!!
        $event->eventLocation = $request->eventLocation;
        $event->maxNumParticipants = $request->maxNumParticipants;
        $event->eventDescription = $request->eventDescription;
        $event->save();
        return redirect('/home');

    }
    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect("/home");
    }
}
