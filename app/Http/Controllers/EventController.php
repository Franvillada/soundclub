<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(9);
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required'
        ];

        $messages =[
            'title.required' => 'El campo titulo es necesario',
            'description.required' => 'El campo descripcion es necesario',
            'location.required' => 'El campo ubicacion es necesario',
            'date.required' => 'El campo dia es necesario'
        ];

        $validator = $this->validate($request, $rules, $messages);
        $event = new Event;

        $event->title = $validator['title'];
        $event->description = $validator['description'];
        $event->location = $validator['location'];
        $event->date = $validator['date'];
        $event->user_id = Auth::user()->id;

        if($request->file('banner') != null)
        {
            $file = $request->file("banner");
            // Armo un nombre único para este archivo
            $name = $event->id . "." . $file->extension();
            $folder = "public/banners";
            $path = $file->storePubliclyAs($folder, $name);
            
            $event->photo_path = 'storage/banners/'.$name;
        }
        
        $event->save();
        
        return redirect()->route('eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
