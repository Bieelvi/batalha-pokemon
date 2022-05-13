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
        return view('pokemon.index');
    }

    public function leituraJSON()
    {
        $pokemon = $this->leJson->leJSON('charmander');

        return response()->json($pokemon);
    }
}
