<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    //middleware to all methods in this controller

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    //
    public function ShowString(){
        return 'String';
    }
//    public function ShowString1(){
//        return 'String 1';
//    }
//    public function ShowString2(){
//        return 'String 2';
//    }
//    public function ShowString3(){
//        return 'String 3';
//    }
}
