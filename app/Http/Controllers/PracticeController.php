<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            60, 50, 90, 70, 80
        ];
        $data1 = [];
        $tmp_max = max($data);
        $tmp = 0;
        $data1 = [0=>$tmp_max];
        for($j=1; $j < count($data); $j++) {
            for($i=0; $i < count($data); $i++) {
                if(($data[$i] < $tmp_max) && ($data[$i] >= $tmp)) {
                    $tmp = $data[$i];
                }
            }
            $data1[$j] = $tmp;
            $tmp_max = $tmp;
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
