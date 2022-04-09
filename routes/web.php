<?php


use App\Http\Controllers\ManualController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function()
{

    $reflection = new ReflectionClass(\App\Models\House::class);  //  inspect the methods and constants of any class!

    print_r($reflection->getMethods());

});

Route::get('/house', [\App\Http\Controllers\HouseController::class, 'index']);
Route::get('/room', [\App\Http\Controllers\RoomController::class, 'index']);



Route::get('/samplexml', [\App\Http\Controllers\HouseController::class,'sampleXml']);
Route::get('/xmltojson', [\App\Http\Controllers\HouseController::class,'xmlToJson']);
Route::get('/housexml', [\App\Http\Controllers\HouseController::class, 'xmlHouse']);
Route::get('/addhousexml', [\App\Http\Controllers\HouseController::class, 'addXml']);
Route::post('/addhousexml', [\App\Http\Controllers\HouseController::class, 'addXml'])->name('add-house-xml');
Route::get('/addroomxml', [\App\Http\Controllers\RoomController::class, 'addXml']);
Route::post('/addroomxml', [\App\Http\Controllers\RoomController::class, 'addXml'])->name('add-room-xml');

Route::match(["get", "post"], "read-xml", [\App\Http\Controllers\ReadXmlController::class, "index"])->name('xml-upload');


Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::get('/sitemap', function (){

    $path= ('sitemap.xml');

    SitemapGenerator::create('http://localhost:8000')->writeToFile($path);
    return 'sitemap created';
//    SitemapGenerator::create(URL::to('http://localhost:8000'))->writeToFile(public_path('sitemap.xml'));
//
//    return 'sitemap created';
});

Route::get('/main',[ManualController::class, 'index']);
Route::get('/addjson',[ManualController::class, 'addJson']);
