<?php

namespace App\Http\Controllers\controllerdemo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller {
   /**
      * Responds to requests to GET /test
   */
  public function __construct()  
        {  
            $this->middleware('controllermiddleware')->only('getAdminProfile');  
       }    

   public function getIndex() {
      
        $resultgc="getIndex method";
        return view('pages.controller',compact('resultgc'));
   }
   
   /**
      * Responds to requests to GET /test/show/1
   */
   public function getShow($id=null) {
      $resultgc="getShow method";
        return view('pages.controller',compact('resultgc'));
   }
   
   /**
      * Responds to requests to GET /test/admin-profile
   */
   public function getAdminProfile() {
      $resultgc="getAdminProfile method";
      return view('pages.controller',compact('resultgc'));
   }
   
   /**
      * Responds to requests to POST /test/profile
   */
   public function postProfile() {
      $resultgc="postProfile method";
      return view('pages.controller',compact('resultgc'));
   }
}
