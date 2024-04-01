<?php

namespace App\Http\Controllers\session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function store(Request $request)  
    {  
    $request->session()->put('user', $request->input('username'));  
    $session_user = $request->session()->get('user');   

   return redirect()->route('session.sessionhome')->with('session_user', $session_user);
    //return redirect()->route('session.sessionhome')->with('message', 'State saved correctly!!!');
    //return back()->withInput();
     } 
     public function storevalues(Request $request,$value1,$value2)  
    {  

    $request->session()->put('s_value1', $value1);  
    session(['s_value2'=>$value2]);  
 
    $usr= array("name"=> "Peter","email"=> "peter@w3adda.com", "ID"=> "135");
    session()->put('user_info', $usr);

   
   


    //$session_value_all = $request->session()->all();     
     //dd($session_value_all);

    return view('pages.session');
   
     } 
     public function retrieving(Request $request)  
     {  
     //$session_value_all = $request->session()->all();     
     //dd($session_value_all);
     $allSessions = Session::all();
     dd($allSessions);
    
      } 
      public function deletingusersession(Request $request)  
     {  
        $request->session()->forget('user');  
        return view('pages.session');
      } 
      public function deletingallsession(Request $request)  
     {  
        $request->session()->flush();  
        return view('pages.session');
      } 
}
