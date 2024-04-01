<?php

namespace App\Http\Controllers\controllerdemo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleActionController extends Controller
{
         public function __invoke($id)  
    {  
        $id2=$id;
        return view('pages.controller',compact('id2'));
    }  
}
