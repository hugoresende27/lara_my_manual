<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Manual;
use App\Models\Room;
use App\Models\User;

use Illuminate\Http\Request;

class ManualController extends Controller
{

    public function worldMeter()
    {
        $client = new \Goutte\Client();
        $url = 'https://www.worldometers.info/coronavirus/';
        $page = $client->request('GET', $url);
//        dd($page);
//        echo "<pre>";
//        print_r($page);
//        echo $page->filter('.maincounter-number')->text();
        $page->filter('#maincounter-wrap')->each(function($item){
            $this->results[$item->filter('h1')->text()]=$item->filter('.maincounter-number')->text();
        });


        $data = $this->results;
        return view('manual.worldmeter', compact('data'));
    }
    public function myNotes()
    {
        return view('manual.mynotes');
    }
    public function indexManualApi()
    {
        return view ('manual.indexapi');
    }
    public function index()
    {
        return view('main');
    }

    public function  addJson()
    {
        $data = Manual::all();
        return view ('manual.addjson', compact('data'));
    }

    ////////////////////////////  ADD JSON TO DATABASE /////////////////////////////////////////////////////
    public function storeJson(Request $request)
    {
        $data = $request->only('name','email','mobile_number');
        $test['data'] = json_encode($data);
        Manual::insert($test);
        return back()->with('success','Data saved successfully!');

    }

    public function  addJsonv2()
    {
        $data = Manual::all();
        return view ('manual.addjsonv2', compact('data'));
    }

    ////////////////////////////  ADD JSON TO DATABASE /////////////////////////////////////////////////////
    public function storeJsonv2(Request $request)
    {
        $product=$request->all();
        $test['jsontype'] = json_encode($product);
        $product = Manual::insert($test);
        return back()->with('success','Data saved successfully!');

    }


    ////////////////////////////  ADD XML TO DATABASE /////////////////////////////////////////////////////
    public function storeXml(Request $req)
    {
        if($req->isMethod("POST")){

            $xmlDataString = file_get_contents(public_path($req->input('file')));
            $xmlObject = simplexml_load_string($xmlDataString);

            $json = json_encode($xmlObject);
            $phpDataArray = json_decode($json, true);

            if(isset($phpDataArray['xmldata']) && count($phpDataArray['xmldata']) > 0){
                $dataArray = array();
                foreach($phpDataArray['xmldata'] as $index => $data){
                    $dataArray[] = [
                        "name" => $data['name'],
                        "email" => $data['email'],
                    ];
                }
                Manual::insert($dataArray);

                return back()->with('success','Data saved successfully!');
            }
            return back()->with('failed','Invalid File');
        }

        $data = Manual::all();

        return view("manual.addxml", compact('data'));
    }


    ////////////////////////////  CONVERT XML TO JSON OUTPUT BROWSER /////////////////////////////////////////////////
    public function ddXml(Request $req)
    {
        if($req->isMethod("POST")) {
            $xmlString = file_get_contents($req->input('file'));

            $xmlObject = simplexml_load_string($xmlString);
            $json = json_encode($xmlObject);
            $phpArray = json_decode($json, true);
//            dd(get_defined_vars());
            return view ('manual.ddxml', compact('json'));
        };

        return view ('manual.ddxml');
    }

    ////////////////////////////  CONVERT INPUT FILE TO XML /////////////////////////////////////////////////////
    public function convertToXml()
    {

        return view ('manual.convert_to_xml');
    }
    public function convertToXmlhouse()
    {
        $data = House::all();
        return response()->xml(['house' => $data->toArray()]);
    }
    public function convertToXmlroom()
    {
        $data = Room::all();
        return response()->xml(['room' => $data->toArray()]);
    }
    public function convertToXmluser()
    {
        $data = User::all();
        return response()->xml(['user' => $data->toArray()]);
    }

    ////////////////////////////  DELETE DATA FROM DATABASE /////////////////////////////////////////////////////
    public function destroy($id)
    {
        $del = Manual::find($id);
        $del->delete();
        return back()->with('failed','Record Deleted');
    }


}
