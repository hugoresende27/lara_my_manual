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
            <h6>public function resize(ResizeImageRequest $request)</h6>
            <pre>
    {
        $all = $request->all();
        //UploadedFile or String
        $image = $all['image'];
        unset ($all['image']);
        $data = [
            'type' => ImageManipulation::TYPE_RESIZE,
            'data'=> json_encode($all),
            'user_id'=>null,
        ];
        if (isset($all['album_id'])) {
            $data['album_id'] = $all['album_id'];
        }
        $dir = 'image_api\\'.Str::random().'\\';
        $absolutePath = public_path($dir);
        File::makeDirectory($absolutePath); //create directory
        if ($image instanceof  UploadedFile) {
            $data['name'] = $image->getClientOriginalName();
            // test.jpg -> test-resize.jpg
            $filename = pathinfo($data['name'], PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $originalPath = $absolutePath.$data['name'];
            $image->move($absolutePath, $data['name']);
        } else {
            $data['name'] = pathinfo($image, PATHINFO_BASENAME);
            $filename = pathinfo($image, PATHINFO_FILENAME);
            $extension = pathinfo($image, PATHINFO_EXTENSION);
            $originalPath = $absolutePath.$data['name'];
            copy($image,  $originalPath);
        }
        $data['path'] = $dir.$data['name'];
        $w = $all['w'];
        $h = $all['h'] ?? false;
        list($width, $height, $image) = $this->getImageWidthAndHeight($w, $h, $originalPath);
        $resizedFilename = $filename.'-resized.'.$extension;
        $image->resize($width,$height)->save($absolutePath.$resizedFilename);
        $data['output_path'] = $dir.$resizedFilename;
        $imageManipulation = ImageManipulation::create($data);
        return new ImageManipulationResource( $imageManipulation);
}
            </pre>
        </div>

        <div class="col-md-6">
            <h6>protected function getImageWidthAndHeight($w, $h, string $originalPath)</h6>
            <pre>
//1000px -> 50% => 500px
$image = Image::make($originalPath);
$originalWidth = $image->width();
$originalHeight = $image->height();
if (str_ends_with($w, '%')){
    $ratioW = (float)str_replace('%', '',$w);
    $ratioH = $h ? (float)str_replace('%', '', $h) : $ratioW;
    $newWidth = $originalWidth * $ratioW / 100 ;
    $newHeight = $originalHeight * $ratioH / 100 ;
} else {
    $newWidth = (float)$w;
    $newHeight = $h ? (float)$h : $originalHeight * $newWidth/$originalWidth;
}
return [$newHeight,$newWidth, $image];
            </pre>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <h5></h5>
            <pre style="overflow-x: hidden">

            </pre>
        </div>

        <div class="col-md-6">
            <h5></h5>
            <img src="/my_images/" alt="image" >
        </div>
    </div>

@endsection
