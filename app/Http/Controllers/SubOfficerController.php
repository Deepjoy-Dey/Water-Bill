<?php

namespace App\Http\Controllers;
use App\applicationform;
use Illuminate\Http\Request;

class SubOfficerController extends Controller
{
    public function show(){
        $data=applicationform::all();
        // dd ($data);
    return view('Sub_Division_Officer',['data'=>$data]);
     }
}
