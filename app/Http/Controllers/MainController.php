<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Post;
use Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $collection = Post::orderBy('created_at', 'desc')
        ->paginate(30);
        //#############posts
        $posts = Post::orderBy('created_at', 'desc')
        ->where('category', 1)
        ->paginate(10);
        //Announcements
        $announcements = Post::orderBy('created_at', 'desc')
        ->where('category', 2)
        ->paginate(10);
        //Events
        $events = Post::orderBy('created_at', 'desc')
        ->where('category', 3)
        ->paginate(10);

        //#############videos
        $videos = Post::orderBy('created_at', 'desc')
        ->where('category', 5)
        ->paginate(10);
        //Podcasts
        $podcasts = Post::orderBy('created_at', 'desc')
        ->where('category', 4)
        ->paginate(10);

        //#############transcripts
        $transcripts = Post::orderBy('created_at', 'desc')
        ->where('category', 7)
        ->paginate(10);
        //Bibles
        $declarations = Post::orderBy('created_at', 'desc')
        ->where('category', 8)
        ->paginate(10);

        //#############Devotions
        $devotions = Post::orderBy('created_at', 'desc')
        ->where('category', 6)
        ->paginate(10);

        //#############Get latest declaration

        $latest_declaration = Post::orderBy('created_at', 'desc')
        ->where('category', 8)
        ->first();

        return view('index', compact('collection', 'posts', 'announcements', 'events', 'videos', 'podcasts', 'transcripts', 'declarations', 'devotions', 'latest_declaration'));
    }
}
