<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'ccc', 'bbb', 'aaa'
        ];
        $data1 = [
            0=>'aaa', 2=>'ccc'
        ];
        $replace = array_replace($data, $data1);
        return view('practice.index',compact('replace'));
        
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
