<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    use HasFactory;
    public function beer(){
        return $this->belongsTo('App\models\Beer');
    }
    public function hops(){
        return $this->hasMany(hops::class);
    }
    public function malt(){
        return $this->hasMany(malt::class);
    }
    public function yeast(){
        return $this->hasMany(yeast::class);
    }
}
