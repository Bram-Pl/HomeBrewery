<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BeerController extends Controller
{
    /**
     * Display index-page, eg general info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showBeer()
    {
        echo("Dorser: Wild Wardje");
    }
    
    public function beers(){
        $user = Auth::user();
        return(view('Beer.index')->with("user",$user));
    }
    
    public function allBeers(){
        $user = Auth::user();
        return(view('Beer.all')->with("user",$user));
    }

}
