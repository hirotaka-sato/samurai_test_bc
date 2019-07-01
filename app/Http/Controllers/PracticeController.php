<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'Input A (Odd or Even) = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        //$b = $request->b;
        $b = (int)($a % 2);
        if ($b == 0) {
            $msg = 'Even Number';
        } else {
            $msg = 'Odd Number';
        }
        $data = [
            'msg'=>'A is ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
