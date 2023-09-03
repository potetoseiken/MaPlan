<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    
    //Blockが属するDayを取得
    public function day() {
        return $this->belongsTo(Day::class);
    }
    
    //Blockが属するCategoryを取得
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    //Blockが属するTransMethodを取得
    public function trans_method() {
        return $this->belongsTo(TransMethod::class);
    }
    
    //Blockが属するIconを取得
    public function icon() {
        return $this->belongsTo(Icon::class);
    }
    
    //Blockに属するSpotを取得
    public function spots() {
        return $this->belongsToMany(Spot::class);
    }
}
