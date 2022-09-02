<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class GithubController extends Controller
{
   public function index()
   {
     //Get user information
     $response = Http::get('https://api.github.com/users/taylorotwell');
     $getResponse=$response->json();

     //Get data wit OAuth Token
     //$response = Http::withToken(config('services.api.github'))->get('https://api.github.com/users/taylorotwell/hovercard?subject_type=repository');
     
     return view('api.github',compact('getResponse'));
   }
}
