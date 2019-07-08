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
}
