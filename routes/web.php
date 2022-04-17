<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RssFeedController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\XmlController;
use App\Models\Manual;
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
    return view('main');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/teste', function()
{

    $reflection = new ReflectionClass(\App\Models\House::class);  //  inspect the methods and constants of any class!

    print_r($reflection->getMethods());

});

Route::get('/house', [HouseController::class, 'index']);
Route::get('/room', [RoomController::class, 'index']);



Route::get('/samplexml', [HouseController::class,'sampleXml']);
Route::get('/xmltojson', [HouseController::class,'xmlToJson']);
Route::get('/housexml', [HouseController::class, 'xmlHouse']);
Route::get('/addhousexml', [HouseController::class, 'addXml']);
Route::post('/addhousexml', [HouseController::class, 'addXml'])->name('add-house-xml');
Route::get('/addroomxml', [RoomController::class, 'addXml']);
Route::post('/addroomxml', [RoomController::class, 'addXml'])->name('add-room-xml');

Route::match(["get", "post"], "read-xml", [ReadXmlController::class, "index"])->name('xml-upload');


Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::get('/getsitemap', function (){

    $path= ('sitemap.xml');

    SitemapGenerator::create('http://localhost')->writeToFile($path);
    return 'sitemap created';

});

Route::get('/main',[ManualController::class, 'index']);
Route::get('/addjson',[ManualController::class, 'addJson']);
Route::post('/addjson',[ManualController::class, 'storeJson'])->name('add_json');

Route::get('/addjsonv2',[ManualController::class, 'addJsonv2']);
Route::post('/addjsonv2',[ManualController::class, 'storeJsonv2'])->name('add_jsonv2');



Route::match(["get", "post"], "/addxml", [ManualController::class, "storeXml"])->name('add_xml');


Route::delete('/deldata/{id}',[ManualController::class, 'destroy']);

Route::match(["get", "post"],'/ddxml', [ManualController::class, 'ddXml'])->name('dd_xml');

Route::get('/clientxml', function(){
    $client = Manual::all();
    return response()->xml(['client' => $client->toArray()]);
});

Route::get('/convertxml', [ManualController::class,'convertToXml']);
Route::get('/convertxmlhouse', [ManualController::class,'convertToXmlhouse']);
Route::get('/convertxmlroom', [ManualController::class,'convertToXmlroom']);
Route::get('/convertxmluser', [ManualController::class,'convertToXmluser']);



Route::get('/manual_api', [ManualController::class,'indexManualApi']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('my_notes',[ ManualController::class,'myNotes']);
Route::get('worldmeter',[ ManualController::class,'worldMeter']);


Route::get('/xml', [XmlController::class, 'index']);
Route::get('/modeltoxml', [XmlController::class, 'modelXml']);
Route::get('/sitemap', [XmlController::class, 'siteMap']);
Route::get('/addxmldb', [XmlController::class, 'addXmlDb']);
Route::post('addxmldb', [XmlController::class, 'storeXml']);
Route::delete('deletebook/{id}', [XmlController::class, 'delete']);

Route::get('/booksxml', [XmlController::class, 'booksToXml']);
Route::get('/xmlconverter', [XmlController::class, 'xmlConverter']);

Route::get('/sitemapmanual', [SitemapController::class ,'indexB']);

Route::get('/sitemapB', [SitemapController::class, 'index']);


Route::resource('/tasks', TaskController::class);


Route::get('image_api1', [HomeController::class, 'imageApi']);
Route::get('image_api2', [HomeController::class, 'imageApi2']);

Route::get('/token-gen', [HomeController::class, 'tokenGen']);
Route::post('/token-gen/create', [HomeController::class, 'createToken']);

Route::get('/rss-feed', [RssFeedController::class, 'index']);
Route::get('/rss-feed/feed', [RssFeedController::class, 'feed']);
Route::get('/rss-feed-b', [RssFeedController::class,'generate_rss_feed'])->name('file');








Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
