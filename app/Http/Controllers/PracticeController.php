<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{

    public function index() {

        $data = [
            60, 50, 90, 70, 80
        ];
        $data1 = $data;
        $tmpmax = max($data);
        $tmp = 0;
        $data1 = [0=>$tmpmax];
        for($j=1; $j < count($data); $j++) {
            for($i=0; $i < count($data); $i++) {
                if(($data[$i] < $tmpmax) && ($data[$i] >= $tmp)) {
                    $tmp = $data[$i];
                }
            }
            $data1[$j] = $tmp;
            $tmpmax = $tmp;
            $tmp = 0;
        }
        return view('practice.index',compact('data1'));
        
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
