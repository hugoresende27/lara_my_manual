@extends('layouts.app')

@section('content')

    <h1>Add a Json File to your DB</h1>

    <div class="row">
        <div class="col-md-4">
            <form id="laravel_json" method="post" action="{{url('addjson')}}">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
                </div>
                <div class="form-group">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number">
                </div>
                <div class="form-group text-center m-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <h5>This form will submit to a field data on DB</h5>
            <img src="/my_images/addjsondata.png" alt="image">
        </div>




    </div>

    <div class="row">
        <div class="col-6">
            <h5>Database data</h5>

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">$d->data</th>
                    <th scope="col">DEL</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    @if(!empty($d->data))
                        <tr>
                            <th scope="row">{{$d->id}}</th>
                            <th scope="row">{{$d->data}}</th>
                            <th scope="row">
                                <form action="deldata/{{$d->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Are u sure?')" >Delete</button>
                                </form>
                            </th>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <div class="my-card">
                <ul>
                    <li>Fill the form</li>
                    <li>Function to request data</li>
                    <li>$test['data'] = json_encode($data); //data to json</li>
                    <li> Manual::insert($test); //insert in db</li>
                </ul>
            </div>


        </div>
    </div>





@endsection
