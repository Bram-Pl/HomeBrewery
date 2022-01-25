<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Models\Beer;
use App\Models\brewery;
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
    
    public function soap()
    {
        $user = Auth::user();
        return(view('/beer.soap')->with("user",$user));
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
    
    public function show($id)
    {
        $user = Auth::user();
        $beer = Beer::find($id);
        $hops = $beer->GetHops;
        $malt = $beer->GetMalt;
        $yeast = $beer->GetYeast;
        
        return(view('Beer.beer')->with("user",$user)->with("beer",$beer)->with("hops", $hops)->with("malt", $malt)->with("yeast", $yeast));
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
        $type= $req->input('type');
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
        $breweryID = $req->input('brewery');
        $Beerdata=array('name' => $name,
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
            'type' => $type,
            'breweries_id' => $breweryID,
            'contributed_by' => $Contributer,
                );        
        $beerID = DB::table('beers')->insertGetId($Beerdata);
        
        $Hopsdata=array(
            'beer_id' => $beerID,
            'name' => $hopsName,
            'amount' => $hopsAmount,
            'unit' => $hopsUnit,
        );
        $hopsID = DB::table('hops')->insertGetId($Hopsdata);
        
        $Yeastdata=array(
            'beer_id' => $beerID,
            'name' => $yeastName,
            'amount' => $yeastAmount,
            'unit' => $yeastUnit,
        );
        $yeastID = DB::table('yeasts')->insertGetId($Yeastdata);
        
        $Maltdata=array(
            'beer_id' => $beerID,
            'name' => $maltName,
            'amount' => $maltAmount,
            'unit' => $maltUnit,
        );
        $maltID = DB::table('malts')->insertGetId($Maltdata);
        
        
        //$message = json_encode($beerID);

        $message = json_encode(1);
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
