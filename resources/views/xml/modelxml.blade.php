@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>Convert a model to XML</h5>

        <div class="row">

            <div class="col-md-4">
                <form action="{{url('/xmlconverter')}}" method="GET" class="mb-3 flex">

                    <select class="form-select " aria-label="Default select example" name="model">
                        <option value=1>Books</option>
                        <option value=2>Users</option>
                        <option value="3">Houses</option>
                        <option value="4">Rooms</option>
                    </select>

                    <div class="ms-3">
                        <button type="submit" class="btn btn-success">Convert</button>
                    </div>
                </form>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-6" style="max-height: 300px; overflow-y:auto;">
                <div class="flex">
                    <h5 class="p-1 ">Books table</h5>

                </div>
                    <table class="table table-dark" >
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">description</th>
                            <th scope="col">publication year</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $d)
                            @if(!empty($d->name))
                                <tr>
                                    <th scope="row">{{$d->id}}</th>
                                    <th scope="row">{{$d->name}}</th>
                                    <th scope="row">{{$d->description}}</th>
                                    <th scope="row">{{$d->publication_year}}</th>

                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>

            <div class="col-md-6" style="max-height: 300px; overflow-y:auto;">
                <h5>Users table</h5>
                <table class="table table-dark" >
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">create at</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $d)
                        @if(!empty($d->name))
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <th scope="row">{{$d->name}}</th>
                                <th scope="row">{{$d->email}}</th>
                                <th scope="row">{{$d->created_at}}</th>


                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>


        <hr>
        <div class="row">

            <div class="col-md-6" style="max-height: 300px; overflow-y:auto;">
                <h5>Houses table</h5>
                <table class="table table-dark" >
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">number</th>
                        <th scope="col">created at</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($houses as $d)
                        @if(!empty($d->name))
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <th scope="row">{{$d->name}}</th>
                                <th scope="row">{{$d->number}}</th>
                                <th scope="row">{{$d->created_at}}</th>



                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-6" style="max-height: 300px; overflow-y:auto;">
                <h5>Rooms table</h5>
                <table class="table table-dark" >
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">size</th>
                        <th scope="col">house ID</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $d)
                        @if(!empty($d->name))
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <th scope="row">{{$d->name}}</th>
                                <th scope="row">{{$d->size}}</th>
                                <th scope="row">{{$d->house_id}}</th>

                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>




    </div>
@endsection
