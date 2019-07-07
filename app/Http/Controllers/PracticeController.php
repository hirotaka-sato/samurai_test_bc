<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'aaa'
        ];
        return view('practice.index',compact('data'));
        
    }
    public function post(Request $request) {
        $msg = $request->msg;
        $data = [
            'msg'=>'bbb'
        ];
        return view('practice.index', $data);
    }
}
