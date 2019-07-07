<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PracticeController extends Controller
{
    public function index() {
        $data = [
            ['name'=>'山田たろう', 'mail'=>'raro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy']
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
