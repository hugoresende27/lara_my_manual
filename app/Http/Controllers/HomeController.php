<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>[
            'imageApi',
            'imageApi2'
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function imageApi()
    {
        return view ('image_api.index');
    }

    public function imageApi2()
    {
        return view ('image_api.index2');
    }

    public function tokenGen(Request $request)
    {
        $user = $request->user();
        return view ('tokengen.index', [
            'tokens' => $user->tokens
        ]);
    }

    public function createToken(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $tokenName = $request->post('name');

        $user = $request->user();
        $token = $user->createToken($tokenName);

        dd($token);
//        dd(get_defined_vars());
        return view ('tokengen.index', [
            'tokens' => $user->tokens,

        ]);
    }

}
