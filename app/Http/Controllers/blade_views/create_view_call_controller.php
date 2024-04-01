<?php

namespace App\Http\Controllers\blade_views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class create_view_call_controller extends Controller
{
    public function display(){  
        return view('pages.blade_views')->with('pagename','create_view_call_controller');  
      } 
  
}
