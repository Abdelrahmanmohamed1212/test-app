<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function GetIndex(){
        $obj= new \stdClass();
        $obj -> name ='ahmed';
        $obj -> id = 5;
        $obj -> gender ='male';
        return view('welcome')->with('name','ahmed ali');
    }
}
