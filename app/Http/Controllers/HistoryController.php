<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\History;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Display the history page
        $user_id = Auth::user()->id;
        $histories = History::orderBy('created_at', 'desc')
        ->where('user_id', $user_id);

        $histories = $histories->paginate(20);

        //Latest declaration
        $latest_declaration = Post::orderBy('created_at', 'desc')
        ->where('category', 8)
        ->first();

        return view('history.index', compact('histories', 'latest_declaration'));
    }
}
