<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->join('suggestions', 'posts.id', '=', 'suggestions.post_id')
            ->select('posts.*', 'suggestions.*')
            ->orderBy('post_id', 'DESC')
            ->get();

        $newses = DB::table('news')
            ->join('users', 'news.user_id', '=', 'users.id')
            ->orderBy('news.id', 'DESC')
            ->get();
        return view('theme1')->with(['posts' => $posts, 'newses' => $newses]);
    }
}
