<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransMethod extends Model
{
    use HasFactory;
    
    //TransMethodに属するBlockを取得
    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
