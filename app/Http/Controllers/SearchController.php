<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $search = $request->get('search');
        $posts = Post::where('title', 'like', '%' . $search . '%');

        $searches = $posts->paginate(20);
        return view('search.index', compact('searches'));
    }
}
