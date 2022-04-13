<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Http\Requests\StoreCafeRequest;
use App\Http\Requests\UpdateCafeRequest;
use Illuminate\Support\Facades\Request;

class CafeController extends Controller
{
    /*
  |-------------------------------------------------------------------------------
  | Get All Cafes
  |-------------------------------------------------------------------------------
  | URL:            /api/v1/cafes
  | Method:         GET
  | Description:    Gets all of the cafes in the application
  */
    public function getCafes(){
        $cafes = Cafe::all();

        return response()->json( $cafes );
    }

    /*
    |-------------------------------------------------------------------------------
    | Get An Individual Cafe
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/cafes/{id}
    | Method:         GET
    | Description:    Gets an individual cafe
    | Parameters:
    |   $id   -> ID of the cafe we are retrieving
    */
    public function getCafe( $id ){
        $cafe = Cafe::where('id', '=', $id)->first();

        return response()->json( $cafe );
    }

    /*
    |-------------------------------------------------------------------------------
    | Adds a New Cafe
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/cafes
    | Method:         POST
    | Description:    Adds a new cafe to the application
    */
    public function postNewCafe(StoreCafeRequest $request){


        $cafe = new Cafe();

//        $cafe->name     = Request::get('name');
//        $cafe->address  = Request::get('address');
//        $cafe->city     = Request::get('city');
//        $cafe->state    = Request::get('state');
//        $cafe->zip      = Request::get('zip');
        //////////////////////////////////////
        $cafe->name     = $request->input('name');
        $cafe->address  = $request->input('address');
        $cafe->city     = $request->input('city');
        $cafe->state    = $request->input('state');
        $cafe->zip      = $request->input('zip');
        $cafe->latitude    = $request->input('latitude');
        $cafe->longitude      = $request->input('longitude');


        $cafe->save();

        return response()->json($cafe, 201);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCafeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCafeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function show(Cafe $cafe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafe $cafe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCafeRequest  $request
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCafeRequest $request, Cafe $cafe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafe $cafe)
    {
        //
    }
}
