<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    
    //Memoが属するPlanを取得
    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
