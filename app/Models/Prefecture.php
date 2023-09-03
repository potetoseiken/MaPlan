<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    
    //Prefectureに属するPlanを取得
    public function plans() {
        return $this->belongsToMany(Plan::class);
    }
}
