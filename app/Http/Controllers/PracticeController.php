<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            '残業'=>'zangyo',
            '財閥'=>'zaibatsu',
            '過労死'=>'karoshi',
        ];
        return view('practice.index', ['data'=>$data]);
    }
    //public function post(Request $request) {
        // $a = $request->a;
        // $b = $request->b;
        //$msg = print_r($data);
        //return view('practice.index', $data);
    //}
}
