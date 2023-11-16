<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class LoginWithApiController extends Controller
{
    public function index(Request $request)
    {
        return Http::get('http://127.0.0.1:8000/api/users');
    }

    public function register(Request $request)
    {
        // Http::post('http://127.0.0.1:8000/api/users', [
        //     'email' => $request->get('email'),
        //     'password' => Hash::make($request->get('password'))
        // ]);
    }
}
