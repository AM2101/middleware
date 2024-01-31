<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function testRequest(Request $req){
        // echo 'form submit';
        return $req->input();
    }
}
