@extends('layouts.app')

@section('content')

    <h1>Input a XML file and see the JSON output in browser</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('dd_xml') }}" id="frm-create-course" method="post">
                @csrf
                <div class="form-group">
                    <label for="file">Select XML File:</label>
                    <input type="file" class="form-control" required id="file" name="file">
                </div>
                <div class="form-group text-center m-3">
                    <button type="submit" class="btn btn-primary" id="submit-post">Submit</button>
                </div>

            </form>

        </div>
        <div class="col-md-6">
            <h5>Function if POST</h5>
            <pre>
$xmlString = file_get_contents($req->input('file'));
$xmlObject = simplexml_load_string($xmlString);

$json = json_encode($xmlObject);
$phpArray = json_decode($json, true);
dd($phpArray);
            </pre>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            <h5>This form will output an array with the xml data</h5>
            <img src="/my_images/ddxml.png" alt="image">
        </div>

    </div>



@endsection
