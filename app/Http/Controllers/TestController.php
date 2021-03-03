<?php

namespace App\Http\Controllers;
use App\Test;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('test');
    }
    public function store() {
        
        $tests = new Test();

        $tests->school = request('school');
        $tests->phoneno = request('phoneno');

        $tests->save();

        return redirect('/');
    }
}
