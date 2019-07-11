<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PracticeRequest;
use Validator;
//use App\Http\Middleware\PracticeMiddleware;
class PracticeController extends Controller
{
    public function index(Request $request) {

        return view('practice.index', ['msg'=>'フォームを入力してください。',]);
        
    }

    public function post(PracticeRequest $request) {
        
        return view('practice.index', ['msg'=>'正しく入力されました！']);
    }

}
