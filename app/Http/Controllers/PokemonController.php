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
        $pokemonList = ['charmander', 'bulbasaur', 'squirtle', 'mew', 'dragonite'];

        foreach ($pokemonList as $pokemonItem) {
            $pokemons[] = $this->leJson->leJSON($pokemonItem);
        } 

        shuffle($pokemonList);
        
        $pokemonInimigo = $this->leJson->leJSON($pokemonList[0]);
        
        return view('pokemon.index', compact(
            'pokemons',
            'pokemonInimigo'
        ));
    }
}
