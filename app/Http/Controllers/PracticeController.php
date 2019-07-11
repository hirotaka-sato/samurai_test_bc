<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PracticeRequest;
use Validator;
//use App\Http\Middleware\PracticeMiddleware;
class PracticeController extends Controller
{
    public function index(Request $request) {
 
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '＊クッキーはありません。';
        }
        return view('practice.index', ['msg'=>$msg,]);
        
    }

    public function post(Request $request) {
        
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('practice.index', ['msg'=> 
            '「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return $response;
    }

}
