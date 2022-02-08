<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetupController extends Controller
{
    public function index()
    {
        return view('meetup.index');
    }
}
