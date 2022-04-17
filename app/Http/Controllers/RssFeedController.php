<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class RssFeedController extends Controller
{
    //
    public function index()
    {
        return view ('rss.index');
    }
    public function feed()
    {
        $posts = Post::where('status', 'published')->
        orderBy('created_at', 'desc')->
        limit(50)->get();
        return response()->view('rss.feed', compact('posts'))->header('Content-Type', 'application/xml');

    }

    public function generate_rss_feed()
    {
        $users = User::orderBy('id', 'desc')
            ->get();
        return response()->view('rss.feed', compact('users'))->header('Content-Type', 'application/xml');
    }
}
