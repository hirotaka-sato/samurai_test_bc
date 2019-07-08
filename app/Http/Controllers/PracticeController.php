<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticeController extends Controller
{
    public function index(Request $request) {
        $items = DB::select('select * from people');
        return view('practice.index', ['items'=>$items]);
    }
    
    public function post(Request $request) {
        $items = DB::select('select * from people');
        return view('practice.index', ['items'=>$items]);
    }

    public function add(Request $request) {
        return view('practice.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age) values(:name, :mail, :age)', $param);
        return redirect('/practice');
    }
}
