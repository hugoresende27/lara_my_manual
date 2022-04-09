@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>Posts</h1>
        <small>https://www.youtube.com/watch?v=OtGrKywzRNI&ab_channel=Itube</small>
    </div>

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">UserID</th>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
        </tr>
        </thead>
        <tbody>
{{--        {{$uniqueUserIds}}--}}
        @foreach($uniqueUserIds as $uni)
            <tr>
                <th scope="row">{{$uni['userId']}}</th>

            </tr>
        @endforeach

        @foreach($titles as $title)
            <tr>
                <th scope="row">{{$title}}</th>

            </tr>
        @endforeach



        </tbody>
    </table>

@endsection
