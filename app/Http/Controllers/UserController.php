<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index' , compact('users'));
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
     *Guarda la informacion faltante de un usuario general
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request , $id)
    {
        
        $user = User::find($id);

        if ($user->surname == null && $request->surname !== null) {
            $user->update([
                "surname" => $request->surname
            ]);
        }
        
        if ($user->birthday == null && $request->birthday !== null) {
            $user->update([
                "birthday" => $request->birthday
            ]);
        }
        
        if ($user->dni == null && $request->dni !== null) {
            $user->update([
                "dni" => $request->dni
            ]);
        }

        if ($user->telephone_number == null && $request->telephone_number !== null) {
            $user->update([
                "telephone_number" => $request->telephone_number
            ]);
        }

        if ($user->ciudad_id == null && $request->ciudad_id !== null) {
            $user->update([
                "ciudad_id" => $request->ciudad_id
            ]);
        }

        if ($user->password == null && $request->password !== null) {
            $user->update([
                "password" => Hash::make($request->password)
            ]);
        }


        $email = $user->email;

        return redirect(route('successful', compact('email')));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
