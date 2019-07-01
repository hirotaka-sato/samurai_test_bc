<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'Input A & B = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        $b = $request->b;
        $msg = floor($a * $b);
        $data = [
            'msg'=>'A x B is ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
