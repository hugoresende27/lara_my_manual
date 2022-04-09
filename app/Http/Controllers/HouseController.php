<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addXml(Request $req)
    {
        if($req->isMethod("POST")){

//            $xmlDataString = file_get_contents(public_path('houses.xml'));
            $xmlDataString = file_get_contents(public_path($req->input('file')));
            $xmlObject = simplexml_load_string($xmlDataString);

            $json = json_encode($xmlObject);
            $phpDataArray = json_decode($json, true);

            // echo "<pre>";
            // print_r($phpDataArray);

            if(isset($phpDataArray['house']) && ($phpDataArray['house']) > 0){

                $dataArray = array();

                foreach($phpDataArray['house'] as $index => $data){

                    $dataArray[] = [
                        "name" => $data['name'],
                        "number" => $data['number'],

                    ];
                }

                House::insert($dataArray);

                return back()->with('success','Data saved successfully!');
            }
            return back()->with('failed','Invalid File');
        }

        return view("houses.addhouse");
    }

    public function sampleXml()
    {
        $xmlString = file_get_contents(public_path('sample.xml'));
        $xmlObject = simplexml_load_string($xmlString);

        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        dd($phpArray);
    }

    public function xmlToJson()
    {
        $xmlObject = simplexml_load_file('sample.xml');
        $jsonData = json_encode($xmlObject, JSON_PRETTY_PRINT);

        print_r($jsonData);
    }

    public function xmlHouse()
    {
        $xml = simplexml_load_string(file_get_contents("houses.xml"));
        // convert the XML string to JSON
        $jsonData = json_encode($xml, JSON_PRETTY_PRINT);

        echo '<pre>';
        print_r($jsonData);
    }

    public function index()
    {
        $houses = House::latest()->paginate(12);
        return view ('houses.index', compact('houses'));
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
