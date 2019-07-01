<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
            $data = [
                'data'=>1,
            ];
            return view('practice.index',compact('data'));
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
