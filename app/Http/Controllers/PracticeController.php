<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $number = (int)0;
        for($i=1; $i<=100; $i++) {
            $number += $i;
        }
        return view('practice.index',compact('number'));
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
