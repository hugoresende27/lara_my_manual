@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>RSS</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>RSS (Really Simple Syndication) is an XML-based format for distributing and aggregating Web content (such as news headlines). Using RSS, web content providers can easily create and disseminate feeds of data that include, for example, news links, headlines, and summaries.</p>
        </div>
        <div class="col-md-6">
            <a href="/rss-feed-b"><button class="btn btn-primary">generate_rss_feed</button></a>
            <pre>
public function generate_rss_feed()
{
    $users = User::orderBy('id', 'desc')->get();
    return response()->view('rss.feed', compact('users'))
                     ->header('Content-Type', 'application/xml');
}
            </pre>
        </div>
    </div>





@endsection
