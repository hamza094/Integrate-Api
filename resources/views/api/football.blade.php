<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1>League: SuperLiga</h1>
                  <hr><br>
                  @foreach($matches as $match)
                  <h3>Teams</h3>
                  <p><img src="{{$match['localTeam']['data']['logo_path']}}" style="height:30px;width:30px" alt="">{{$match['localTeam']['data']['name']}} - {{$match['scores']['localteam_score']}}</p>
                  <p>Coach: <b>{{$match['localCoach']['data']['fullname']}}</b></p>
                  <br>
                  <p><img src="{{$match['visitorTeam']['data']['logo_path']}}" style="height:30px;width:30px" alt=""> {{$match['visitorTeam']['data']['name']}} - {{$match['scores']['visitorteam_score']}}</p>
                  <p>Coach: <b>{{$match['visitorCoach']['data']['fullname']}}</b></p>
                  <br>
                  <h3>Goals:</h3>
                  @foreach($match['goals']['data'] as $goal)
                   <p>
                    <span> By: <b>{{$goal['player_name']}}</b></span>
                    <span> / Assisted: <b>{{$goal['player_assist_name']}}</b></span>
                    <span> / At: <b>{{$goal['minute']}}</b></span>
                   </p>
                   @endforeach
                  <br>
                  <p>Venue: {{$match['venue']['data']['name']}}  {{$match['venue']['data']['address']}}  {{$match['venue']['data']['city']}}</p>
                  <br>
                  <hr>
                  <br>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
