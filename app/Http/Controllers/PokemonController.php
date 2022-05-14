<?php

namespace App\Http\Controllers;

use App\LeituraJSON\LeJSON;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    private $leJson;

    public function __construct(LeJSON $leJson)
    {
        $this->leJson = $leJson;
    }

    public function index()
    {
        $pokemonList = ['charmander', 'bulbasaur', 'squirtle', 'charmander', 'bulbasaur', 'squirtle'];

        foreach ($pokemonList as $pokemonItem) {
            $pokemons[] = $this->leJson->leJSON($pokemonItem);
        }    
        
        return view('pokemon.index', compact(
            'pokemons'
        ));
    }
}
