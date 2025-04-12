<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class genApi extends Controller
{
    public function index(){
        $gender = Gender::with('superheroes')->get();
        return response()->json($gender);
    }

   

    public function show($name){
        $gender = Gender::where('name', $name)->with('superheroes')->get();
        return response()->json($gender);
    }

     

}