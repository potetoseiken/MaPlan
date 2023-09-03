<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spotlist extends Model
{
    use HasFactory;
    
    //Spotlistに属するUserを取得
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    //Spotlistに属するSpotを取得
    public function spots() {
        return $this->belongsToMany(Spot::class);
    }
}
