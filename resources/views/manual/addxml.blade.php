@extends('layouts.app')

@section('content')

<h1>ADD ROOM</h1>
<div class="container" style="margin-top: 50px;">
    <h4 style="text-align: center;">How To Upload And Save XML Data in Laravel 8</h4>

    <div class="row">
        <div class="col-md-6">

            <form action="{{ route('add_xml') }}" id="frm-create-course" method="post">
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

        <div class="col-6" style="max-height: 300px; overflow-y:auto;">
            <h5>Database data</h5>

            <table class="table table-dark" >
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">DELETE</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    @if(!empty($d->name))
                        <tr>
                            <th scope="row">{{$d->id}}</th>
                            <th scope="row">{{$d->name}}</th>
                            <th scope="row">{{$d->email}}</th>
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
            <hr>

        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <h5>xml file example</h5>
            <img src="/my_images/addxmldata.png" alt="image">
        </div>





        <div class="col-6">
            <div class="my-card">
                <ul style="list-style: none">

                    <li>Store XML function
                        <pre style="font-size: 0.8rem">
$xmlDataString = file_get_contents(public_path($req->input('file')));
$xmlObject = simplexml_load_string($xmlDataString);

$json = json_encode($xmlObject);
$phpDataArray = json_decode($json, true);

if(isset($phpDataArray['xmldata']) && count($phpDataArray['xmldata']) > 0){
    $dataArray = array();
    foreach($phpDataArray['xmldata'] as $index => $data){
        $dataArray[] = [
            "name" => $data['name'],
            "email" => $data['email'],
        ];
    }
Manual::insert($dataArray);
                        </pre>
                    </li>

                </ul>
            </div>
        </div>


</div>





</div>

@endsection
