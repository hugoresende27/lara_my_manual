@extends('layouts.app')

@section('content')
    <h1>API Manual</h1>

    <div class="row">
        <div class="col-md-6">
            <p>API is the acronym for Application Programming Interface</p>
            <p>Representational state transfer (REST) is a software architectural style | <a href="https://smartbear.com/blog/soap-vs-rest-whats-the-difference/">More info</a></p>
        </div>

        <div class="col-md-6">
            <p>Rest uses HTTP and can transfer data in XML or JSON</p>
            <p>Rest is not stateful, the server does not store any state about the client session on the server-side</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <h5>CRUD BASICS IN LARAVEL</h5>
            <img src="/my_images/api_crud.jpg" alt="image" width="500px" height="200px">
        </div>

        <div class="col">
            <h5>CRUD ERROS CODE</h5>
            <img src="/my_images/crud_erros.jpg" alt="image" width="500px" height="200px">
        </div>

        <div class="col" style="max-height: 300px; overflow-y:auto;">

                <span>200 :: Ok</span><br>
                <span>201 :: Request Created</span><br>
                <span>204 :: No content</span><br>
                <span>301 :: Endpoint moved</span><br>
                <span>307 :: Temporary Redirect</span><br>
                <span>308 :: Permanent Redirect</span><br>
                <span>400 :: Bad Request</span><br>
                <span>401 :: Unauthorized(wrong credentials)</span><br>
                <span>403 :: Forbidden(wrong credentials)</span><br>
                <span>404 :: Not Found</span><br>
                <span>405 :: Not Allowed(GET/POST)</span><br>
                <span>419 :: Page Expired(@csrf)</span><br>
                <span>422 :: Invalid Data</span><br>
                <span>500 :: Generic Server Error</span><br>
                <span>502 :: Invalid Response</span><br>
                <span>503 :: Service Unavailable</span><br>
                <span>504 :: Gateway timeout</span><br>
        </div>
    </div>
  @endsection
