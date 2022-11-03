<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }
    public function trending()
    {
        //
        $trending = Movie::where('genre', 'Trending')->get();

        return view('trending', ['trending' => $trending]);
    }
    public function superhero()
    {
        //
        $superhero = Movie::where('genre', 'Superhero')->get();

        return view('superhero', ['superhero' => $superhero]);
    }

}
