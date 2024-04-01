<?php

namespace App\Http\Controllers\controllerdemo;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()  
        {  
            $this->middleware(function ($request, $next) {  
                // ...  
             echo "Middleware to Controller using Closure Successfully<br/>";  
                return $next($request);  
            });  
       }    
    

    public function index()
    {
        //
        echo "index";
        $result="index";
        return view('pages.controller',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       echo "create";
       $result="create";
        return view('pages.controller',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'store';
        $result="store";
        return view('pages.controller',compact('result'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        echo "show";
        //
        $id=$id;
        return view('pages.controller',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
        $result="edit";
        return view('pages.controller',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         echo "update";
         $result="update";
        return view('pages.controller',compact('result'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "destroy";
        $result="destroy";
        return view('pages.controller',compact('result'));
   
    }
}
