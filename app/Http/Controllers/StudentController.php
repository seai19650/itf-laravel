<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        return view('home');
    }

    public function showData() {
        $users = DB::table('customers')->get();
        return view('data')->with('users', $users);
    }

    public function store(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $age = $request->input('age');
        DB::table('customers')->insert(
            ['firstname' => $firstname,
            'lastname' => $lastname,
            'age' => $age]
        );
        return redirect('/data');
    }
}
