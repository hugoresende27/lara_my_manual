@extends('layouts.app')

@section('content')

    <h1>Token Generator</h1>
    <div class="row">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{url('/token-gen/create')}}">
                        @csrf

                        <!-- Email Address -->
                            <div>
                                <label for="tokenName">Token Name </label>

                                <input id="tokenName" class="" type="text" name="name"
                                         value="{{old('name')}}" required autofocus/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">
                                    {{ __('Generate') }}
                                </x-button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">User</th>
                <th scope="col">Token id</th>
                <th scope="col">Token name</th>


            </tr>
            </thead>
            <tbody>
            @foreach($tokens as $token)
            <tr>
                <td>{{Auth::user()->name}}</td>
                <td>{{$token->id}}</td>
                <td>{{$token->name}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
