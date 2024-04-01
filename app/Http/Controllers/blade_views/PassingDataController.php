<?php

namespace App\Http\Controllers\blade_views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassingDataController extends Controller
{
        public function display_array_method()  
        {  
            $datas = ['Anisha','Nishka','Sumit'];
            $data2 = 'second name in array';
             return view('pages.blade_views',array('datas'=>$datas,'data2'=>$data2));
        }   
        public function display_array_name_method()  
        {  
              return view('pages.blade_views',['name1'=> 'name1-john','name2'=>'name2-Nishka','name3'=>'name3-Sumit']);  
       }   
        public function display_with_method($id=null)  
        {  
            return view('pages.blade_views')->with('id',$id);  
        }  
        public function display_compact_single_method($name=null)  
        {  
            return view('pages.blade_views', compact('name'));  
        }  
        public function display_compact_multiple_method($idm=null,$namem=null,$passwordm=null)  
        {  
            return view('pages.blade_views',compact('idm','namem','passwordm'));  
        }   

}
