<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class GithubController extends Controller
{
   public function index(){
     $response = Http::get('https://api.github.com/users/taylorotwell');
$getResponse=$response->json();

//$response = Http::withToken('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')->get('https://api.github.com/users/taylorotwell/hovercard?subject_type=repository');

     return view('api.github',compact('getResponse'));
   }
}
