<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Middleware\PracticeMiddleware;
class PracticeController extends Controller
{
    public function index(Request $request) {

        return view('practice.index');
        
    }

}
