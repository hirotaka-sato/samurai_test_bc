<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'A + B = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        $b = $request->b;
        $msg = $a + $b;
        $data = [
            'msg'=>'A + B = ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
