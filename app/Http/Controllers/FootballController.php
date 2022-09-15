<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class FootballController extends Controller
{
    public function index()
    {
      $token=config('services.api.sportmonks');

      $response=Http::get('https://soccer.sportmonks.com/api/v2.0/fixtures/updates?api_token='.$token.'&include=league,localTeam,visitorTeam,localCoach,visitorCoach,goals,venue,season');
      $getResponse=$response->json();
      $collection=collect($getResponse['data']);

      $filtered = $collection->filter(function ($value, $key) {
        return $value['league_id'] == 271;
     });

     $matches=$filtered->all();

      return view('api.football',compact('matches'));
    }
}
