@extends('layouts.app')

@section('content')

    <h1>Sitemaps</h1>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>Blueprint of website</li>
                <li><a href="https://github.com/spatie/laravel-sitemap">Package spatie/laravel-sitemap</a></li>
                <li>Easy way for webmasters to inform search engines </li>
                <li>Sitemap is an XML file that lists URLs</li>
                <li><a href="https://www.sitemaps.org/">www.sitemaps.org</a></li>
                <li>Web crawlers such as Googlebot crawl your site</li>
            </ul>
        </div>
        <div class="col-md-6">
            <pre>

            </pre>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="col">
                <h5>Single URL</h5>
                <img src="/my_images/sitemap1.jpg" alt="image" width="500px" height="200px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="col">
                <h5>loc example</h5>
                <img src="/my_images/sitemap2.jpg" alt="image" width="500px" height="270px">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-secondary">
                <a href="/getsitemap">Generate sitemap.xml</a>
            </button>
            <button class="btn btn-secondary">
                <a href="/convertxmluser">Generate users.xml</a>
            </button>
            <button class="btn btn-secondary">
                <a href="/sitemapB">Sitemap</a>
            </button>
        </div>

    </div>

@endsection
