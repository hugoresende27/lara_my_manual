<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CovidResource;
use App\Models\Covid;


class CovidController extends Controller
{

    public function index()
    {
//        ray()->queries();
//        return CovidResource::collection(Covid::all());

        return CovidResource::collection(\Illuminate\Support\Facades\Cache::remember('cases',60, function (){
            return Covid::all();
        }));
    }
}
