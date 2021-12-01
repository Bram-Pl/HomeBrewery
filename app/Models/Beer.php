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
    
    public function getBeer(){
        return "Dorser: Wild Wardje";
    }

}
