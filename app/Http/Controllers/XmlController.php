<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\House;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class XmlController extends Controller
{
    public function index()
    {
        return view('xml.index');
    }

    public function siteMap()
    {
        $posts = Book::all();
        return response()->view('xml.sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');

    }

    public function addXmlDb()
    {
        $books = Book::all();
        return view ('xml.addtodb', ['books'=>$books]);
    }

    public function storeXml(Request $req)
    {
        $xmlDataString = file_get_contents(public_path($req->input('file')));
        $xmlObject = simplexml_load_string($xmlDataString);

        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);

        // echo "<pre>";
        // print_r($phpDataArray);

        if(isset($phpDataArray['book']) && count($phpDataArray['book']) > 0){

            $dataArray = array();

            foreach($phpDataArray['book'] as $index => $data){

                $dataArray[] = [

                    "name" => $data['name'],
                    "description" => $data['description'],
                    "publication_year" => $data['publication_year'],

                ];
            }

            Book::insert($dataArray);

            return back()->with('success','Data saved successfully!');
        }
        return back()->with('failed','Invalid File');
    }

    public function modelXml()
    {
        $books = Book::all();
        $users = User::all();
        $houses = House::all();
        $rooms = Room::all();
        return view ('xml.modelxml', [
            'books'=>$books,
            'users'=>$users,
            'houses'=>$houses,
            'rooms'=>$rooms,
        ]);
    }

    public function delete($id)
    {
        $del = Book::find($id);
        $del->delete();
        return back()->with('failed','Record Deleted');
    }
}
