@extends('layouts.app')

@section('content')

<h1>ADD ROOM</h1>
<div class="container" style="margin-top: 50px;">
    <h4 style="text-align: center;">How To Upload And Save XML Data in Laravel 8 - Online Web Tutor</h4>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('failed'))
        <div class="alert alert-danger alert-block">

            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('add-room-xml') }}" id="frm-create-course" method="post">
        @csrf
        <div class="form-group">
            <label for="file">Select XML File:</label>
            <input type="file" class="form-control" required id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary" id="submit-post">Submit</button>
    </form>
</div>

@endsection
