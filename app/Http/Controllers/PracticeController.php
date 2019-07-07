<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {

        return view('practice.index', ['message'=>'Hello!']);
        
    }
    public function post(Request $request) {
        $msg = $request->msg;
        $data = [
            'msg'=>'bbb'
        ];
        return view('practice.index', $data);
    }
}
