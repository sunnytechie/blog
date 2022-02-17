<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class SearchController extends Controller
{
    public function search(Request $request) {
        //Latest declaration
        $latest_declaration = Post::orderBy('created_at', 'desc')
        ->where('category', 8)
        ->first();

        $search = $request->get('search');
        $searches = Post::where('title', 'like', '%' . $search . '%')
        ->orWhere('body', 'like', '%' . $search . '%')
        ->paginate(20);        

        return view('search.index', compact('searches', 'latest_declaration'));
    }
}
