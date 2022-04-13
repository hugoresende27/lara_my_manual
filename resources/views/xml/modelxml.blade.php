@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>Convert a model to XML</h5>
        <div class="row">
            <div class="col-md-6" style="max-height: 300px; overflow-y:auto;">
                    <h5>Books table</h5>
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
