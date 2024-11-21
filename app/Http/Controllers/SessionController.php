<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // validate user
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // dd("Hello");
        // attemp 
        if(!Auth::attempt($attributes)) {
            dd("Error");
        }
        // redirect

        // generate session
        request()->session()->regenerate();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
