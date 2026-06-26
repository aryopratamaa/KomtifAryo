<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('user')->latest()->paginate(5);

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('Email')->get();

        return view('event.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:100',
            'tglmulai' => 'required|date',
            'tglselesai' => 'required|date|after_or_equal:tglmulai',
            'Deskripsi' => 'required|string',
            'User_id' => 'required|exists:users,id',
        ]);

        Event::create($validated);

        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $event->load('user');

        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $users = User::orderBy('Email')->get();

        return view('event.edit', compact('event', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'Nama' => 'required|string|max:100',
            'tglmulai' => 'required|date',
            'tglselesai' => 'required|date|after_or_equal:tglmulai',
            'Deskripsi' => 'required|string',
            'User_id' => 'required|exists:users,id',
        ]);

        $event->update($validated);

        return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('event.index')->with('success', 'Event berhasil dihapus.');
    }
}
