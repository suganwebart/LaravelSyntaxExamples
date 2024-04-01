<?php

namespace App\Http\Controllers\cookie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class CookieController extends Controller
{
    public function setCookie(Request $request) {
        $minutes = 60;
        $response = new Response('Hello World');
        $response->withCookie(cookie('cookiecontroller_name', 'virat', $minutes));
        return $response;
     }
     public function getCookie(Request $request) {
        $cookiecontroller_name = $request->cookie('cookiecontroller_name');
        return view('pages.cookie',compact('cookiecontroller_name'));  
     }
}
