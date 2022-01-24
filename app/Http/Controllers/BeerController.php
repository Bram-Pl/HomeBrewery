<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

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
        $user = Auth::user();
        return(view('/index')->with("user",$user));
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
        //$beers = DB::select('select * from beers where name = ?', [1]);
        $beers = DB::select('select * from beers');
        foreach ($beers as $beer){
            echo $beer->name;
        }
        return(view('/beer.all')->with("beers",$beers));
    }
    
    public function beers(){
        $user = Auth::user();
        return(view('Beer.index')->with("user",$user));
    }
    
    public function allBeers(){
        $user = Auth::user();
        $beers = DB::select('select * from beers');
        return(view('Beer.all')->with("user",$user)->with("beers",$beers));
    }
    public function upload()
    {   
        $user = Auth::user();
        return view('Beer.BeerForm')->with("user",$user);
    }
    public function breweries()
    {
        $user = Auth::user();
        return(view('Beer.breweries')->with("user",$user));
    }
    public function recipes()
    {
        $user = Auth::user();
        return(view('Beer.recipes')->with("user",$user));
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

    public function insertBeerServicePost(Request $req){
        $name = $req->input('name');
        $tagline = $req->input('tagline');
        $firstbrewed = $req->input('firstbrewed');
        $Description = $req->input('Description');
        $imageurl = $req->input('imageurl');
        $abv = $req->input('abv');
        $ibu = $req->input('ibu');
        $target_fg = $req->input('target_fg');
        $target_og = $req->input('target_og');
        $ebc = $req->input('ebc');
        $srm = $req->input('srm');
        $ph = $req->input('ph');
        $attenuation = $req->input('attenuation');
        $boilvolume = $req->input('boilvolume');
        $boilvolumeUnit = $req->input('boilvolumeUnit');
        $boilTime = $req->input('boilTime');
        $boilTimeUnit = $req->input('boilTimeUnit');
        $mashTemp = $req->input('mashTemp');
        $mashTempUnit = $req->input('mashTempUnit');
        $mashTime = $req->input('mashTime');
        $mashTimeUnit = $req->input('mashTimeUnit');
        $foodparings = $req->input('foodparings');
        $tips = $req->input('tips');
        $maltName = $req->input('maltName');
        $maltAmount = $req->input('maltAmount');
        $maltUnit = $req->input('maltUnit');
        $hopsName = $req->input('hopsName');
        $hopsAmount = $req->input('hopsAmount');
        $hopsUnit = $req->input('hopsUnit');
        $yeastName = $req->input('yeastName');
        $yeastAmount = $req->input('yeastAmount');
        $yeastUnit = $req->input('yeastUnit');
        $Contributer = $req->input('Contributer');
        $data=array('name' => $name,
            'tagline' => $tagline,
            'first_brewed' => $firstbrewed,
            'Description' => $Description,
            'image_url' => $imageurl,
            'abv' => $abv,
            'ibu' => $ibu,
            'target_fg' => $target_fg,
            'target_og' => $target_og,
            'ebc' => $ebc,
            'srm' => $srm,
            'ph' => $ph,
            'attenuation_level' => $attenuation,
            'boil_volume' => $boilvolume,        
            'food_pairing' => $foodparings,
            'brewers_tips' => $tips,
            'malt_name' => $maltName,
            'malt_amount' => $maltAmount,
            'malt_unit' => $maltUnit,
            'hops_name' => $hopsName,
            'hops_amount' => $hopsAmount,
            'hops_unit' => $hopsUnit,
            'yeast_name' => $yeastName,
            'yeast_amount' => $yeastAmount,
            'yeast_unit' => $yeastUnit,
            'contributed_by' => $Contributer,
                );

        $id = DB::table('beers')->insertGetId($data);
        $message = json_encode($id);


        //$message = json_encode($data);
        return ($message);
    }
    public function insertnameservicePost(Request $req){
        $name = $req->input('name');
        $lastname = $req->input('lastname');
        $number = $req->input('number');
        $data=array('name' => $name,'number' => $number);
        $id = DB::table('nameandid')->insertGetId($data);
        $arr = array('name' => $name,'lastname' =>$lastname);
        $message = json_encode($arr);
        return ($message); 
    }
   
}
