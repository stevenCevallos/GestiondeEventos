<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\UserEventsAttendee;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $events = $user->events;

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $user = Auth::user();
        $event = new Event($request->all());
        $event->user_id = $user->id;
        $event->description = $request->description;
        $event->save();

        return redirect('/events')->with('success', 'Evento creado con éxito');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $attendees = $event->attendees;

        return view('events.show', compact('event', 'attendees'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $event = Event::findOrFail($id);
        $event->update([
            'name' => $request->name,
            'location' => $request->location,
            'date' => $request->date,
            'description' => $request->description,
        ]);

        return redirect()->route('events.show', $event->id);
    }
}
