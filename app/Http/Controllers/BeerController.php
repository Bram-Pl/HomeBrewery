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
    public function upload()
    {   
        $user = Auth::user();
        return view('Beer.BeerForm')->with("user",$user);
    }
    
    
    
public function InsertBeers(Request $request){
    $name = $request->input('name');
    $tagline = $request->input('tagline');
    $first_brewed = $request->input('first_brewed');
    $Description = $request->input('Description');
    $image_url = $request->input('image_url');
    $abv = $request->input('abv');
    $ibu = $request->input('ibu');
    $target_fg = $request->input('target_fg');
    $target_og = $request->input('target_og');
    $ebc = $request->input('ebc');
    $srm = $request->input('srm');
    $ph = $request->input('ph');
    $attenuation_level = $request->input('attenuation_level');
    $boil_volume = $request->input('boil_volume');
    $ingredients = $request->input('ingredients');
    $food_pairing = $request->input('food_pairing');
    $brewers_tips = $request->input('brewers_tips');
    $contributed_by = $request->input('contributed_by');
}
   
}
