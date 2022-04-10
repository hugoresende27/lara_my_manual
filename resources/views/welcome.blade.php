@extends('layouts.app')

@section('content')

        <a href="/house"><button  class="btn btn-lg btn-success my-btn" >Houses</button></a>
        <a href="/room"><button  class="btn btn-lg btn-success my-btn" >Rooms</button></a>
        <a href="/teste"><button  class="btn btn-lg btn-success my-btn" >ReflectionClass</button></a>
        <a href="/samplexml"><button  class="btn btn-lg btn-success my-btn" >SampleXML</button></a>
        <a href="/xmltojson"><button  class="btn btn-lg btn-success my-btn" >Xml to JSON</button></a>
        <a href="/housexml"><button  class="btn btn-lg btn-success my-btn" >Houses XML</button></a>
        <a href="/read-xml"><button  class="btn btn-lg btn-success my-btn" >READ XML</button></a>
        <a href="/addhousexml"><button  class="btn btn-lg btn-success my-btn" >ADD house XML</button></a>
        <a href="/addroomxml"><button  class="btn btn-lg btn-success my-btn" >ADD room XML</button></a>

        <a href="{{route('post.index')}}"><button  class="btn btn-lg btn-success my-btn" >JSON Posts</button></a>

        <a href="/sitemap"><button  class="btn btn-lg btn-success my-btn" >Sitemap</button></a>
        <a href="/clientxml"><button  class="btn btn-lg btn-success my-btn" >Convert to XML</button></a>
@endsection
