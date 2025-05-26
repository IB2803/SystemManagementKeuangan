<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SavingsController extends Controller
{
    public function index(){
        return view('savings');
    }
    //
    public function calculate(Request $request){
        $wanttosave = request('wanttosave');
        $days = request('days');
        $money = request('money');
        // $oprsave = request('oprsave');
        $mode = request('mode');

        $dailyamount = 0;
        $duration = 0;

        if($mode == 'days' && $days > 0){
            $dailyamount = $wanttosave / $days;
            $duration = $days;
        }
        else if ($mode =='money' && $money > 0){
            $dailyamount = $money;
            $duration = ceil($wanttosave / $money);

        }

        return view('savings', compact('dailyamount','duration','mode', 'wanttosave' , 'days', 'money'));
    }
}
