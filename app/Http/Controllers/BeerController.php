<?php

namespace App\Http\Controllers;


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
    
    public function listOfBeers(){
        return(view('Beer.index'));
    }

}
