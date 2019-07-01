<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'Sir Name + First Name = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        $b = $request->b;
        $msg = $a . $b;
        $data = [
            'msg'=>'Your Name is ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
