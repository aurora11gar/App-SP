<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperHero;
use Illuminate\Support\Facades\Validator;

class spApi extends Controller
{

    public function index()
    {

        $superheroes = SuperHero::with('universe', 'gender')->get();
        return response()->json($superheroes);
    }


    public function show($name)
    {
        $superhero = SuperHero::where('name', $name)
                              ->with('universe', 'gender')
                              ->first();

        if (!$superhero) {
            return response()->json(['error' => 'Superhero not found'], 404);
        }

        return response()->json($superhero);
    }
}