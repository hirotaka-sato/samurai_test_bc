<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticeController extends Controller
{
    public function index(Request $request) {

        $items = DB::table('people')->get();
        return view('practice.index', ['items'=>$items]);
    }

    public function rest(Request $request) {

        return view('practice.rest');
    }

    public function show(Request $request) {

        $page = $request->page;
        $items = DB::table('people')
            ->offset($page *3)
            ->limit(3)
            ->get();
        return view('practice.show', ['items'=>$items]);
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
        DB::table('people')->insert($param);
        return redirect('/practice');
    }

    public function edit(Request $request) {

        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('practice.edit', ['form' => $item]);
    }

    public function update(Request $request) {

        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people') 
            ->where('id', $request->id)
            ->update($param);
        return redirect('/practice');
    }

    public function del(Request $request) {

        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('practice.del', ['form'=>$item]);
    }

    public function remove(Request $request) {

        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/practice');
    }
}
