<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addXml(Request $req)
    {
        if($req->isMethod("POST")){

            $xmlDataString = file_get_contents(public_path($req->input('file')));
            $xmlObject = simplexml_load_string($xmlDataString);

            $json = json_encode($xmlObject);
            $phpDataArray = json_decode($json, true);

            // echo "<pre>";
            // print_r($phpDataArray);

            if(isset($phpDataArray['room']) && count($phpDataArray['room']) > 0){

                $dataArray = array();

                foreach($phpDataArray['room'] as $index => $data){

                    $dataArray[] = [
                        "house_id" => $data['house_id'],
                        "name" => $data['name'],
                        "size" => $data['size'],

                    ];
                }

                Room::insert($dataArray);

                return back()->with('success','Data saved successfully!');
            }
            return back()->with('failed','Invalid File');
        }

        return view("rooms.addroom");
    }
    public function index()
    {

        $rooms = Room::latest()->paginate(12);
        return view ('rooms.index', compact('rooms'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
