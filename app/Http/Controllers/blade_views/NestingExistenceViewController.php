<?php

namespace App\Http\Controllers\blade_views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 

class NestingExistenceViewController extends Controller
{
    public function nesting_display(){  
        return view('pages.nesting_view.nesting_view_detail');  
      } 
      public function existence_view_checking(){  
        if (View::exists('pages.nesting_view.nesting_view_detail')) {  
            $existence_view_checking_txt="the view of the pages.nesting_view.nesting_view_detail exists";  
            return view('pages.blade_views')->with('existence_view_checking_txt',$existence_view_checking_txt); 
            }  
            else  
            {  
                $existence_view_checking_txt="view does not exist";    
                return view('pages.blade_views')->with('existence_view_checking_txt',$existence_view_checking_txt); 
                }  
            
             
      }  
  
}
