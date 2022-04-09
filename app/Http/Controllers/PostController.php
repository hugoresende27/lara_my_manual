<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    //
    public function index()
    {
        $g_posts= Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $posts = collect($g_posts);
        $uniqueUserId=$posts->unique('userId');
        $countUnique = $posts->countBy('userId');
        $titles=[];
        foreach($posts as $p)
        {
            $x=$p['title'];
            array_push($titles,$x);
        }

//        dd(get_defined_vars());
        return view ('posts.index', [
                        'uniqueUserIds'=> $uniqueUserId,
                        'titles'=> $titles,]);
    }
}
