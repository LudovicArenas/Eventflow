<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // afficher la liste des événements

        $events = Event::all();

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // afficher le formulaire de création

        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // enregistrer un nouvel événement
        Event::create([
            'title' => $request->title,
        'description' => $request->description,
        'date' => $request->date,
        'location' => $request->location,
        'banner' => $request->banner,

        ]);
        
        return redirect()->route('events.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // afficher un événement précis
        return view('events.show', compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // afficher le formulaire de modification
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // modifier un événement
        $event->update([


            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'banner' => $request->banner,
        ]);
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // supprimer un événement
        $event->delete();

        return redirect()->route('events.index');
    }
}
