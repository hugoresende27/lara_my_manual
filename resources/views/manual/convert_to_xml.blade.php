@extends('layouts.app')

@section('content')

    <h1>Convert a Model to xml</h1>

    <div class="row">
        <div class="col-md-6">

            <a href="/convertxmlhouse"><button class="btn btn-secondary">House Example</button></a>
            <a href="/convertxmlroom"><button class="btn btn-secondary">Room Example</button></a>
            <a href="/convertxmluser"><button class="btn btn-secondary">User Example</button></a>
        </div>

        <div class="col-md-6">
            <h5>convert function xml</h5>
            <pre>
$data = House::all();
return response()->xml(['house' => $data->toArray()]);
                </pre>
        </div>


    </div>

    <div class="row">
        <div class="col-6">

            <h5>Final output</h5>
            <img src="/my_images/convertxml.png" alt="image">

        </div>


    </div>





@endsection
