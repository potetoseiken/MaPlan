<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;


class PlanController extends Controller
{
    //プラン作成1ページ目の表示
    public function show(Prefecture $prefecture) {
        return view('plans.create1')->with(['prefectures' => $prefecture->get()]);
    }
    
    //プラン作成1ページ目の「次へ」ボタンの処理
    public function store1(Request $request, Plan $plan) {
        $input = $request['plan'];
        $plan->user_id = Auth::id();
        $plan->fill($input)->save();
        
        $prefecture_ids = $request['prefecture_ids'];
        foreach ($prefecture_ids as $key => $var) {
            $plan->prefectures()->attach($var);
        }
        return back();
    }
}
