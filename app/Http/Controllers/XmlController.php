<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;

class XmlController extends Controller
{
    public function index()
    {
        return view('xml.index');
    }

    public function siteMap()
    {
        $posts = User::all();
        return response()->view('xml.sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');

    }
}
