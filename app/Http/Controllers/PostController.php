<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store() {
        $data = request()->validate([
            'thumbnail' => 'image',
            'sound' => 'mimes:mp3',
            'title' => '',
            'body' => '',
            'category' => '',
            'event_location' => '',
            'display_date' => '',
            'url' => '',
            'memory_verse' => '',
            'prayer' => '',
            'author' => '',
            'slug' => '',
            'tag' => '',
        ]);

        dd($data);
    }
}
