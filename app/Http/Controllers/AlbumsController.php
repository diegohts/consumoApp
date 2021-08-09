<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumsController extends Controller
{
    public function index()
    {
        // $response =  Http::get('https://jsonplaceholder.typicode.com/albums');  
        // dd($response->json());   
        return view('albums');  
    }
}