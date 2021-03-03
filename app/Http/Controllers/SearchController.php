<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\applicationform;

class SearchController extends Controller
{
    public function store(){
        $search=$_GET['Search'];
        if($search){
        $application_forms=applicationform::where('Bill_No_Consumer_Registration_No','LIKE',$search)->first();
        return view('Search',['data'=>$application_forms]);
        }
        else{
            echo "<h2>You have to enter the Bill No./Consumer No.</h2>";
           }

       
    }
}
