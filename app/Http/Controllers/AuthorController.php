<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorController extends Controller
{

    public function authorList(Request $request){
        try{
            $token = session('token');
            if($token){
                $response = Http::withHeaders([
                    'accept' => 'application/json',
                    'Authorization' => $token,
                ])->get('https://symfony-skeleton.q-tests.com/api/v2/authors', 
                [
                    "orderBy" => "id",
                    "direction" => "ASC",
                    "limit"=> 12,
                    "page"=> 1
                ]);

                $data['totalPages'] = $response['total_pages'];
                $data['currentPages'] = $response['current_page'];
                $data['limit'] = $response['limit'];
                $data['orderBy'] = $response['order_by'];
                $data['direction'] = $response['direction'];
                $data['items'] = $response['items'];
        
                return view('author.list', compact('data'));
            }

            else{
                return response()->json(["You are unauthorized"]);
            }
        }
        catch(\Exception $e){

        }
    }

    public function 
}
