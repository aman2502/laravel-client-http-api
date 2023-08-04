<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{

    public function loginPage(){
        return view('login');
    }

    public function login(){
        
        $response = Http::post('https://symfony-skeleton.q-tests.com/api/v2/token', 
        [
            "email" => "ahsoka.tano@q.agency",
            "password" => "Kryze4President"
        ]);

        $token = $response['token_key'];

        session()->put('token', $token);
        return view('user', ['data' => $response['user']]);
      
    }

    // public function refreshToken(Request $request){
    //     $token = $request->bearerToken();
    //     $response = Http::post('https://symfony-skeleton.q-tests.com/api/v2/token', [
    //         "csrf_token" => $token
    //     ]);

    //     return view('user', ['data' => $response['user']]);
    // }


    public function resetPassword(){

        $response = Http::post('https://symfony-skeleton.q-tests.com/api/v2/reset-password', 
        [
            "email" => "ahsoka.tano@q.agency",
            "callback_url" => "http://127.0.0.1:8000/reset-password-link"
        ]);

        return $response;
    }

    public function resetPasswordLink(){
        return view('reset-password');
    }
    
    
}
