@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Rooms</h1>
    </div>
    <div class="my-houses">


        <div class="row">
            @foreach($rooms as $room)


                <div class="card m-3" style="width: 18rem;">
                    <h5 class="card-title m-3">House Item</h5>
                    <div class="card-body">
                        <h2 class="card-title">{{$room->name}}</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NR:{{$room->size}}</li>
                        <li class="list-group-item">HouseID:{{$room->house_id}}</li>


                    </ul>

                </div>



            @endforeach
        </div>




    </div>

    <div class="m-3 my-links">
        {{ $rooms->links() }}
    </div>


@endsection
