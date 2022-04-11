<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CovidResource;
use App\Models\Covid;
use Illuminate\Http\Request;

class CovidController extends Controller
{

    public function index()
    {
        return CovidResource::collection(Covid::all());
    }
}
