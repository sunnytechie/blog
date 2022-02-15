<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Post;
use App\Models\User;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    //Post
    public function storePost(Request $request) {
        $authInteger = Auth::user()->user_type;
        if ($authInteger != '1') {
            return redirect()->route('index.post')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }
        
        $data = request()->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'title' => '',
            'body' => '',
            'category' => '',
            'event_location' => '',
            'display_date' => '',
        ]);

        $imagePath = request('thumbnail')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        Post::create([
            'thumbnail' => $imagePath,
            'title' => $data['title'],
            'body' => $data['body'],
            'category' => $data['category'],
            'event_location' => $data['event_location'],
            'display_date' => $data['display_date'],
            //'name' => $request->name,
        ]);
        
        return redirect()->route('index.post')->with('status', 'You\'ve successfully created a new post.');
    }

    //Media
    public function storeMedia(Request $request) {
        $authInteger = Auth::user()->user_type;
        if ($authInteger != '1') {
            return redirect()->route('index.post')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }
        
        $data = request()->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'title' => '',
            'body' => '',
            'category' => '',
            'display_date' => '',
            'url' => '',
        ]);

        $imagePath = request('thumbnail')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        Post::create([
            'thumbnail' => $imagePath,
            'title' => $data['title'],
            'body' => $data['body'],
            'category' => $data['category'],
            'display_date' => $data['display_date'],
            'url' => $data['url'],
        ]);
        
        return redirect()->route('index.post')->with('status', 'You\'ve successfully created a new post.');
    }

    //Quotes
    public function storeQuote(Request $request) {
        $authInteger = Auth::user()->user_type;
        if ($authInteger != '1') {
            return redirect()->route('index.post')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }
        
        $data = request()->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'title' => '',
            'body' => '',
            'category' => '',
        ]);

        $imagePath = request('thumbnail')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        Post::create([
            'thumbnail' => $imagePath,
            'title' => $data['title'],
            'body' => $data['body'],
            'category' => $data['category'],
            //'name' => $request->name,
        ]);
        
        return redirect()->route('index.post')->with('status', 'You\'ve successfully created a new post.');
    }

    //Devotionals
    public function storeDevotion(Request $request) {
        $authInteger = Auth::user()->user_type;
        if ($authInteger != '1') {
            return redirect()->route('index.post')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }
        
        $data = request()->validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            //'sound' => ['required', 'mimes:mp3'],
            'title' => '',
            'body' => '',
            'category' => '',
            'display_date' => '',
            'memory_verse' => '',
            'prayer' => '',
        ]);

        $imagePath = request('thumbnail')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1920, 1080);
        $image->save();

        Post::create([
            'thumbnail' => $imagePath,
            //'sound' => $data['sound'],
            'title' => $data['title'],
            'body' => $data['body'],
            'category' => $data['category'],
            'display_date' => $data['display_date'],
            'memory_verse' => $data['memory_verse'],
            'prayer' => $data['prayer'],
            //'name' => $request->name,
        ]);
        
        return redirect()->route('index.post')->with('status', 'You\'ve successfully created a new post.');
    }



    //show post
    public function showPost($id) {
        $post = Post::find($id);
        $postId = $post->id;
        $postTitle = $post->title;
        $postBody = $post->body;
        $postCategory = $post->category;
        $postEventLocation = $post->event_location;
        $postDisplayDate = $post->display_date;
        $postThumbnail = $post->thumbnail;
        $postUrl = $post->url;
        $postSound = $post->sound;
        $postMemoryVerse = $post->memory_verse;
        $postPrayer = $post->prayer;
        $postCreatedAt = $post->created_at;
        $postUpdatedAt = $post->updated_at;
        return view('snippets.index.pages.showpost', compact('post', 'postId', 'postTitle', 'postBody', 'postCategory', 'postEventLocation', 'postDisplayDate', 'postThumbnail', 'postUrl', 'postSound', 'postMemoryVerse', 'postPrayer', 'postCreatedAt', 'postUpdatedAt'));
    }

    //show media
    public function showMedia($id) {
        $post = Post::find($id);
        $postId = $post->id;
        $postTitle = $post->title;
        $postBody = $post->body;
        $postCategory = $post->category;
        $postEventLocation = $post->event_location;
        $postDisplayDate = $post->display_date;
        $postThumbnail = $post->thumbnail;
        $postUrl = $post->url;
        $postSound = $post->sound;
        $postMemoryVerse = $post->memory_verse;
        $postPrayer = $post->prayer;
        $postCreatedAt = $post->created_at;
        $postUpdatedAt = $post->updated_at;
        return view('snippets.index.pages.showmedia', compact('post', 'postId', 'postTitle', 'postBody', 'postCategory', 'postEventLocation', 'postDisplayDate', 'postThumbnail', 'postUrl', 'postSound', 'postMemoryVerse', 'postPrayer', 'postCreatedAt', 'postUpdatedAt'));
    }

    //show Devotions
    public function showDevotion($id) {
        $post = Post::find($id);
        $postId = $post->id;
        $postTitle = $post->title;
        $postBody = $post->body;
        $postCategory = $post->category;
        $postEventLocation = $post->event_location;
        $postDisplayDate = $post->display_date;
        $postThumbnail = $post->thumbnail;
        $postUrl = $post->url;
        $postSound = $post->sound;
        $postMemoryVerse = $post->memory_verse;
        $postPrayer = $post->prayer;
        $postCreatedAt = $post->created_at;
        $postUpdatedAt = $post->updated_at;

        $date = Carbon::parse($postDisplayDate);
        $read_time = $date->isoFormat('MMMM Do YYYY'); 


        return view('snippets.index.pages.showdevotion', compact('read_time', 'post', 'postId', 'postTitle', 'postBody', 'postCategory', 'postEventLocation', 'postDisplayDate', 'postThumbnail', 'postUrl', 'postSound', 'postMemoryVerse', 'postPrayer', 'postCreatedAt', 'postUpdatedAt'));
    }
}
