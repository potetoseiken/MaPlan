<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
    
    //Iconに属するBlockを取得
    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
