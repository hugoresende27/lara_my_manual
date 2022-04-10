@extends('layouts.app')

@section('content')

    <h1>Add a Json File to your DB version 2</h1>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ url("addjsonv2") }}" method="POST">
                @csrf
                <h5>with _token</h5>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input type="number" name="price" class="form-control" step="0.01">
                </div>
                <div class="form-group">
                    <label for="properties">Properties</label>
                    <div class="row">
                        <div class="col-md-2">
                            Key:
                        </div>
                        <div class="col-md-4">
                            Value:
                        </div>
                    </div>

                    <h5>with key and index</h5>
                    @for ($i=0; $i <= 4; $i++)
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" name="properties[{{ $i }}][key]" class="form-control" value="{{ old('properties['.$i.'][key]') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="properties[{{ $i }}][value]" class="form-control" value="{{ old('properties['.$i.'][value]') }}">
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="text-center m-3">
                    <input class=" btn btn-danger" type="submit">
                </div>
            </form>
        </div>

        <div class="col-md-8">
            <h5>store function</h5>
                <pre>
$test['jsontype'] = json_encode($product);
$product = Manual::insert($test);
                </pre>

            <h5>Database data</h5>

            <table class="table table-dark">
                <thead>
                <tr>

                    <th scope="col">jsontype</th>
                    <th scope="col">DEL</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    @if(!empty($d->jsontype))
                        <tr>

                            <th scope="row">{{$d}}</th>
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










    </div>

    <div class="row">
        <div class="col-6">

        </div>


    </div>





@endsection
