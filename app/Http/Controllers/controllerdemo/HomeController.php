<?php

namespace App\Http\Controllers\controllerdemo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name=null)
    {
       
        $result="Creating Basic Controller";
         return view('pages.controller',compact(array('name', 'result')));
    }

}
