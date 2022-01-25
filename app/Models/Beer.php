<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;
    
    /*
    protected $cast = [
        'properties' => 'array'
    ];
    */
    public function GetHops(){
        return $this->hasMany(hops::class);
    }
    public function GetMalt(){
        return $this->hasMany(malt::class);
    }
    public function GetYeast(){
        return $this->hasmany(yeast::class);
    }
    public function GetBrewery(){
        return $this->belongsTo(brewery::class, 'foreign_key');
    }
    public function GetReviews(){
        return $this->hasmany(review::class);
    }
    
    public function getBeer(){
        return "Dorser: Wild Wardje";
    }

}
