<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        return view('news_update');
    }

    public function store(Request $request)
    {
        $imageName = time() . '.' . request()->file->getClientOriginalExtension();
        request()->file->move(public_path('/assets/news'), $imageName);

        $news = new News();
        $news->user_id = Auth::user()->id;
        $news->image = $imageName;
        $news->loadFromRequest($request);
        $news->save();

        return redirect()->route('news');

    }
}
