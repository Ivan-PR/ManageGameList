<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterGame;
use App\Models\Game;
use App\Models\Language;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;

class HomeController extends Controller {
    public function __invoke(FilterGame $request) {
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();

        if($request!== null){
            //creo una consulta que me traiga todos los juegos que cumplan con las condiciones de los filtros sin añadir los que tengan el valor 0

            $games = Game::where('platform_id', $request->platform_id)
            ->where('location_id', $request->location_id)
            ->where('language_id', $request->language_id)
            ->where('romsize_id', $request->romsize_id)
            ->get();

        }
        else{
            $games = Game::all();
        }
        // Falta analizar que viene por el request y en caso de que no sea All o Todos o x y si no el objeto $games lo filtramos con metodos de laravel.
        
        
        return view('home', compact("games", "locations", 'languages', 'platforms', 'romsizes'));
    }

    public function viewGame(Game $gameOne) {
        $games = Game::all();
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
        return view('homeGameOne', compact("games", "gameOne", "locations", 'languages', 'platforms', 'romsizes'));
    }
}
