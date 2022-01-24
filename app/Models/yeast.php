<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yeast extends Model
{
    use HasFactory;
    public function beer(){
        return $this->belongsTo('App\Models\Beer');
    }
}
