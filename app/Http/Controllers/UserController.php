<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::all(['id', 'name', 'city', 'age']);
        return view('welcome', compact('users'));
    }

    public function statistic(Request $request)
    {
        return view('statistic');
    }

    public function result1(Request $request)
    {
        $action = $request -> all('action');
        $name = $request -> all('name');
        
        $users = User::query()
            ->where('name', '=', $name)
            ->paginate(12);
        
        $count = $users->count();

        return view('result', compact('users', 'count'));
    }

    public function result2(Request $request)
    {
        $action = $request -> all('action');
        $age1 = $request -> all('age1');
        $age2 = $request -> all('age2');

        if ($age1['age1'] < $age2['age2']) {
            $users = User::query()
                ->where('age', '<', $age2)
                ->where('age', '>', $age1)
                ->paginate(12);
        } else {
            $users = User::query()
                ->where('age', '>', $age2)
                ->where('age', '<', $age1)
                ->paginate(12);
        }
        
        $count = $users->count();

        return view('result', compact('users', 'count'));
    }

    public function result3(Request $request)
    {
        $users = User::avg('age');
        
        return view('result', compact('users'));
    }

    public function result4(Request $request)
    {
        $users = DB::table('users')
            ->selectRaw('name as id, COUNT(name) as count')
            ->groupBy('name')
            ->orderByRaw('COUNT(name) DESC')
            ->paginate(10);
        
        return view('result', compact('users'));
    }

    public function result5(Request $request)
    {
        $users = DB::table('users')
            ->selectRaw('city as id, COUNT(city) as count')
            ->groupBy('city')
            ->orderByRaw('COUNT(city) DESC')
            ->paginate(10);
        
        return view('result', compact('users'));
    }
}
