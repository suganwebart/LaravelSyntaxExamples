<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserRegistration extends Controller
{
    public function postRegister(Request $request) {
        //Retrieve the name input field
        $name = $request->input('name');
        //Retrieve the username input field
        $username = $request->username;
        //Retrieve the password input field
        $password = $request->password;
        $resultreg="success";
        
       return view('pages.request',compact("name","username","password","resultreg"));
        

    }
}
