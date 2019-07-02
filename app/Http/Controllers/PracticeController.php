<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = array();
        $data = [
            60, 50, 90, 70, 80, 100
        ];
        $max = 0;
        $j = count($data);
        for($i=0; $i < $j; $i++) {
            if($data[$i] > $max) {
                $max = $data[$i];
            }
        }
        //$max = max($data);
        return view('practice.index',compact('max'));
        
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
