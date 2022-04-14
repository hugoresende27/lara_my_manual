<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cafe;
use App\Models\Category;
use App\Models\House;
use App\Models\Post;
use App\Models\Room;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\Ray\Settings\Settings;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;



class SitemapController extends Controller
{

    public function indexB()
    {
        return view ('sitemaps.indexB');
    }

    public function index() {
        $posts = Cafe::all();
//        dd($posts);
        return response()->view('sitemaps.index', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }


}
