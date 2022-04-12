@extends('layouts.app')

@section('content')

    <a href="/addjson"><button  class="btn btn-lg btn-success my-btn" >Add JSON to DB</button></a>
    <a href="/addjsonv2"><button  class="btn btn-lg btn-success my-btn" >Add JSON to DB V2</button></a>
    <a href="/addxml"><button  class="btn btn-lg btn-success my-btn" >Add XML to DB</button></a>
    <a href="/ddxml"><button  class="btn btn-lg btn-success my-btn" >XML &rAarr; JSON</button></a>
    <a href="/convertxml"><button  class="btn btn-lg btn-success my-btn" >Convert a Model to XML</button></a>
    <a href="/api/cases"><button  class="btn btn-lg btn-success my-btn" >API Covid Cases</button></a>
    <a href="/my_notes"><button  class="btn btn-lg btn-success my-btn" >My notes</button></a>
    <a href="/worldmeter"><button  class="btn btn-lg btn-success my-btn" >World Meter</button></a>

@endsection
