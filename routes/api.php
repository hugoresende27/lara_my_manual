<?php

use App\Http\Controllers\Api\CovidController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function(Request $request){
   return 'Authenticated!';
});

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    Route::resource('/authors', AuthorsController::class);
    Route::resource('/books', BookController::class);
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('cases', [CovidController::class, 'index']);

///////BOOK BELONGS TO AUTHOR
/// USER THAT CREATED BOOKS
/// //author/{author}
/// for a specific author
///

Route::apiResource('/users', UserController::class);
