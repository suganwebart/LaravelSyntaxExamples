<?php

namespace App\Http\Controllers\request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request) {
        // Usage of path method
        $path = $request->path();
       
        // Usage of is method
        $pattern = $request->is('request/*');
        // Usage of url method
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $fullUrlWithQuery = $request->fullUrlWithQuery(['arg' => 'val']);

        return view('pages.request',compact("path","pattern","url","fullUrl","fullUrlWithQuery"));
     }
     public function requestmethod(Request $request)
    {
        //dd($request->method()); // output:- GET
        $method=$request->method();
        if ($request->isMethod('get')) 
        echo "get-yes";
        return view('pages.request',compact("method"));
    }
}
