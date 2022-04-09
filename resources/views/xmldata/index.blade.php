@extends('layouts.app')

@section('content')


<div class="container" style="margin-top: 50px;">
    <h4 style="text-align: center;">How To Upload And Save XML Data in Laravel 8 - Online Web Tutor</h4>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('xml-upload') }}" id="frm-create-course" method="post">
        @csrf
        <div class="form-group">
            <label for="file">Select XML File:</label>
            <input type="file" class="form-control" required id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary" id="submit-post">Submit</button>
    </form>
</div>

@endsection
