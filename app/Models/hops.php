<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beer;

class hops extends Model
{
    use HasFactory;
    public function beer(){
        return $this->belongsTo(Beer::class);
    }
}
