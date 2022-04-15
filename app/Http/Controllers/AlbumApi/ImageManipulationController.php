<?php

namespace App\Http\Controllers\AlbumApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResizeImageRequest;
use App\Models\Album;
use App\Models\ImageManipulation;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class ImageManipulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function byAlbum(Album $album)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageManipulationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function resize(ResizeImageRequest $request)
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
            ///TODO
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


//        echo '<pre>';
//        var_dump($width,$height);
//        echo '</pre>';
//        exit;

        $resizedFilename = $filename.'-resized.'.$extension;
        $image->resize($width,$height)->save($absolutePath.$resizedFilename);

        $data['output_path'] = $dir.$resizedFilename;
//        var_dump($data);
        $imageManipulation = ImageManipulation::create($data);

        return $imageManipulation;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function show(ImageManipulation $imageManipulation)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageManipulation $imageManipulation)
    {
        //
    }

    protected function getImageWidthAndHeight($w, $h, string $originalPath)
    {
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
    }
}
