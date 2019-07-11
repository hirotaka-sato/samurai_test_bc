<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PracticeRequest;
use Validator;
//use App\Http\Middleware\PracticeMiddleware;
class PracticeController extends Controller
{
    public function index(Request $request) {

        return view('practice.index', ['msg'=>'フォームを入力：']);
        
    }

    public function post(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);
        if ($validator->fails()) {
            return redirect('/practice')
                ->withErrors($validator)
                ->withInput();
        }
        return view('practice.index', ['msg'=>'正しく入力されました！']);
    }

}
