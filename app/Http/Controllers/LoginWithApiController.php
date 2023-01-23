<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class LoginWithApiController extends Controller
{
    public function index(Request $request)
    {
        $http = new \GuzzleHttp\Client();

        $response = $http->post('http://127.0.0.1:8000/api/login', [
            'form_params' => [
                'email' => 'panda12@gmail.com',
                'password' => 'panda1221',
            ]
        ]);

        return "ddd";
    }

    public function register(Request $request)
    {


        Http::post('http://127.0.0.1:8000/api/users', [
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);
    }
}
