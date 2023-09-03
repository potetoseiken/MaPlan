<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    
    //Spotに属するBlockを取得
    public function blocks() {
        return $this->belongsToMany(Block::class);
    }
    
    //Spotが属するSpotlistを取得
    public function spotlists() {
        return $this->begongsToMany(Spotlist::class);
    }
}
