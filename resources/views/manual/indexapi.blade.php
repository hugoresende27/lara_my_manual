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
        <div class="col-md-6">
            <h5>CRUD BASICS IN LARAVEL</h5>
            <img src="/my_images/api_crud.jpg" alt="image" width="500px" height="200px">
        </div>
    </div>
  @endsection
