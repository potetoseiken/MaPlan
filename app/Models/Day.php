<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    
    //Dayが属するPlanを取得
    public function plan() {
        return $this->belongsTo(Plan::class);
    }
    
    //Dayに属するBlockを取得
    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
