<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'Input month (Which season) = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        //$b = $request->b;
        //$b = (int)($a % 2);
        if ($a >= 3 && $a < 6) {
            $msg = 'Spring';
        } elseif ($a >= 6 && $a < 9) {
            $msg = 'Summer';
        } elseif ($a >= 9 && $a <12) {
            $msg = 'Autumn';
        } else {
            $msg = 'Winter';
        }
        $data = [
            'msg'=>'Season is ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
