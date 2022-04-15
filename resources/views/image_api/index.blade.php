@extends('layouts.app')

@section('content')

    <h1>Image Manipulation Api</h1>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/image_api1">Routes | Album Controller/Resource</a>
            <a class="navbar-brand" href="/image_api2">Image Controller | Resize Function</a>
            <a class="navbar-brand" href="/">Demo</a>
        </nav>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5>Routes api.php</h5>
            <pre>
Route::prefix('v1')->group(function () {
    Route::apiResource('album',AlbumController::class);
    Route::get('image',[ImageManipulationController::class,'index']);
    Route::get('image/{image}',[ImageManipulationController::class,'show']);
    Route::post('image/resize',[ImageManipulationController::class,'resize']);
    Route::get('image/by-album/{album}',[ImageManipulationController::class,'byAlbum']);
    Route::delete('image/{album}',[ImageManipulationController::class,'destroy']);
});
            </pre>
        </div>

        <div class="col-md-6">
            <h5>AlbumResource</h5>
            <pre>
public function toArray($request)
    {
        return [
          'id'=>$this->id,
          'name'=>$this->name,
          'created_at'=>$this->created_at,
          'updated_at'=>$this->updated_at,
        ];
    }
            </pre>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <h5>AlbumController</h5>
            <pre style="overflow-x: hidden">
public function index()
{
    return AlbumResource::collection(Album::paginate());
}

public function store(StoreAlbumRequest $request)
{

    $album = Album::create($request->all());
    return new AlbumResource( $album);
}

public function show(Album $album)
{

    return new AlbumResource( $album);
}

public function update(UpdateAlbumRequest $request, Album $album)
{
    $album->update($request->all());
    return new AlbumResource( $album);
}

public function destroy(Album $album)
{
    $album->delete();

    return response('',204);
}
            </pre>
        </div>

        <div class="col-md-6">
            <h5>Postman</h5>
            <img src="/my_images/image_api1.jpg" alt="image" >
        </div>
    </div>

@endsection
