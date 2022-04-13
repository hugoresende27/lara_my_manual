@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h5>books.xml</h5>
                <img src="/my_images/xml_example.jpg" alt="image">
            </div>

            <div class="col-md-6">
              <h5>public function storeXml(Request $req)</h5>
                <pre class="mt-5">
$xmlDataString = file_get_contents(public_path($req->input('file')));
$xmlObject = simplexml_load_string($xmlDataString);
$json = json_encode($xmlObject);
$phpDataArray = json_decode($json, true);

if(isset($phpDataArray['book']) && count($phpDataArray['book']) > 0){

    $dataArray = array();

    foreach($phpDataArray['book'] as $index => $data){

        $dataArray[] = [
                            "name" => $data['name'],
                            "description" => $data['description'],
                            "publication_year" => $data['publication_year'],
                        ];
    }
    Book::insert($dataArray);
return back()->with('success','Data saved successfully!');
                </pre>
            </div>


        </div>
        <hr>
        <div class="row">
            <h1>Add a XML file to Database</h1>

            <div class="col-md-3">
                    <form action="{{ url('addxmldb') }}" id="frm-create-course" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="file">Select books.xml File:</label>
                            <input type="file" class="form-control" required id="file" name="file">
                        </div>
                        <div class="text-center m-3">
                            <button type="submit" class="btn btn-primary" id="submit-post">Submit</button>
                        </div>
                    </form>
            </div>

            <div class="col-9" style="max-height: 300px; overflow-y:auto;">
                <h5>Database data</h5>

                <table class="table table-dark" >
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">publication year</th>
                        <th scope="col">DELETE</th>

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
                                <th scope="row">
                                    <form action="deletebook/{{$d->id}}" method="POST">
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
            </div>
        </div>




    </div>
@endsection
