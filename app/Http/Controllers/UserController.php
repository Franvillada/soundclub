<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('perfil.show')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $queryUser = User::where('name', '=', $name)->get();
        $user = $queryUser[0];                                      //Esto debe hacerse dado que el query de SQL nos trae un $queryUser como una colección de resultados porque podría haber más de uno. En este caso, como hago la búsqueda a través del nombre de usuario que es único, entonces el subíndice 0 me trae el resultado correcto
        return view('perfil.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $user = Auth::user();
        return view('perfil.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'genre' => 'required',
            'birth_date' => 'required',
            'phone_number' => 'numeric',
            'country' => 'required',
            'city' => 'required',
            'instrument' => 'required',
            'band_name' => 'required'
        ];

        $messages = [
            'first_name.required' => 'El campo nombre es obligatorio',
            'last_name.required' => 'El campo apellido es obligatorio',
            'genre.required' => 'El campo sexo es obligatorio',
            'birth_date.required' => 'El campo fecha de nacimiento es obligatorio',
            'phone_number.required' => 'El campo número de teléfono es obligatorio',
            'phone_number.integer' => 'El campo número de teléfono debe ser numérico',
            'country.required' => 'El campo país es obligatorio',
            'city.required' => 'El campo ciudad es obligatorio',
            'instrument.required' => 'El campo instrumento es obligatorio',
            'band_name.required' => 'El campo banda es obligatorio'
        ];

        $validator = $this->validate($request, $rules, $messages);
        $newUser = Auth::user();


        $newUser->first_name = $validator['first_name'];
        $newUser->last_name = $validator['last_name'];
        $newUser->genre = $validator['genre'];
        $newUser->birth_date = $validator['birth_date'];
        $newUser->phone_number = $validator['phone_number'];
        $newUser->country = $validator['country'];
        $newUser->city = $validator['city'];
        $newUser->instrument = $validator['instrument'];
        $newUser->band_name = $validator['band_name'];
        
        if($request->file('avatar') != null)
        {
            $path = $request->file('avatar')->storeAs(
                'avatars', $request->user()->id. ".". $request->file('avatar')->extension()
            );

            /*$file = $request->file("avatar");
            // Armo un nombre único para este archivo
            $name = $newUser->id . "." . $file->extension();
            $folder = "avatars";
            $path = $file->storePubliclyAs($folder, $name);
            */

            $newUser->photo_path = $path;
        }
        
        $newUser->save();

        return view('perfil.show')->with('user', $newUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
