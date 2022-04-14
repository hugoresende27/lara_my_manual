@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="create-task mt-3">
                <div class="screen-task">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                    @if ($message = Session::get('task_message'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </div>
                <h3>Add Task</h3>
                <form action="{{url('tasks')}}"  method="POST" >
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="formGroupExampleInput" placeholder="Please enter task name">
                    </div>
                    <div class="form-group">
                        <label for="desc">Task description</label>
                        <textarea name="desc" id="" cols="33" rows="3">{{old('desc')}}</textarea>

                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label for="date">	&#9200;</label>
                        </div>
                        <input type="date" name="date" value="{{old('date')}}" class="form-control" id="date">
                    </div>
                    <div class="form-group text-center m-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-md-9">
            <div class="row">

                    @foreach($tasks as $task)
                        <div class="col-md-2 show-task text-center m-3">
                            <p>{{$task->name}}</p>
                            <hr>
                            <p>{{$task->date}}</p>
                            <hr>
                            <p>{{$task->desc}}</p>
                            <hr>
                            <div class="flex text-center">
                                <a href="/tasks/{{$task->id}}/edit"><button class="btn btn-secondary m-1">Edit</button></a>
                                <form action="/tasks/{{$task->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger m-1"  onclick="return confirm('Are u sure?')">Delete</button>
                                </form>

                            </div>
                        </div>

                    @endforeach


            </div>
        </div>


    </div>

@endsection
