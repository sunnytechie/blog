<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function show($id) {

        $user = User::with('profile')->findOrFail($id);
                   
        return view('profile.show', compact('user'));
     }

     public function edit() {
        return view('profile.edit');
    }

    public function update() {
        $user_id = auth()->user()->id;
        //Update the user's profile
        return view('profile.show');
        return redirect()->to('profile.show/'.$user_id);
    }
    
}
