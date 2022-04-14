@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <ul style="list-style: none">

                    <li><a href="https://www.freeformatter.com/" target="_blank"><button class="btn btn-danger">XML formatter</button></a></li>
                    <li><a href="/addxmldb"><button class="btn btn-info">Add XML to DB</button></a></li>
                    <li><a href="/modeltoxml"><button class="btn btn-info">Convert a Model to XML</button></a></li>
                </ul>
            </div>
            <div class="col-md-8 bg-light p-3 text-black rounded">
                <h1>XML = eXtensible Markup Language</h1>
                <li>Format that can be red for machine or human</li>
                <li>XML prolog  &lt; xml version="1.0" encoding="UTF-8" &gt; </li>
                <li>XML is Case sensitive, spaces are preserved</li>
                <li>Can have attributes &lt; friend gender="male" &gt;</li>
                <li>Can have prefix &lt; h:table &gt;</li>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <li>DOM - Document Object Model (can be used as programming interface for XML)</li>
            </div>
        </div>


    </div>
@endsection
