<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       
        
    }

    public function home(Request $request)
    {
        return view('welcome');
    }

    public function statistic(Request $request)
    {
        return view('statistic');
    }

    public function result(Request $request)
    {
        $data = $request -> all();

        return view('result', $data);
    }
}
