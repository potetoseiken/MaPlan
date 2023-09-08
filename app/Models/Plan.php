<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    
    protected $fillable =['title', 'start_at', 'finish_at', 'budget'];
    
    //Planが属するUserを取得
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    //Planに属するDayを取得
    public function days() {
        return $this->hasMany(Day::class);
    }
    
    //Planに属するMemoを取得
    public function memos() {
        return $this->hasMany(Memo::class);
    }
    
    //Planに属するPrefectureを取得
    public function prefectures() {
        return $this->belongsToMany(Prefecture::class);
    }
} 
