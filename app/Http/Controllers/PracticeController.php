<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'Input Age & Sex = ?',
        ];
        return view('practice.index', $data);
    }
    public function post(Request $request) {
        $a = $request->a;
        $b = $request->b;
        if ($b == 'male') {
            switch($a) {
                case 25:
                    $msg = '厄年';
                    break;
                case 42:
                    $msg = '厄年';
                    break;
                case 61:
                    $msg = '厄年';
                    break;
                default:
                    $msg = 'Normal';
            }
        } elseif ($b == 'female') {
            switch($a) {
                case 19:
                    $msg = '厄年';
                    break;
                case 33:
                    $msg = '厄年';
                    break;
                case 37:
                    $msg = '厄年';
                    break;
                default:
                    $msg = 'Normal';
            }
        } else {
            $msg = 'Normal';
        }
        $data = [
            'msg'=>'You are ' . $msg . ' !',
        ];
        return view('practice.index', $data);
    }
}
