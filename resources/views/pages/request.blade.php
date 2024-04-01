@extends('layouts.default')
@section('title','Request Syntax')
@section('main-content')
        <!-- Page content-->

        <div class="container">
            
            <table class="table table-sm">
    <thead>
        <tr>
            <th>Names</th>
            <th>Result</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><div><a href="{{route('request.uri')}}">Request URI</a><br/>
             <a href="{{route('request.register')}}">Retrieving Input/Input as Property</a><br/>
             <a href="{{route('request.requestmethod')}}">Request Method</a><br/>
           
</div></td>
            <td><div><b>
                    @isset($method)
                    Method Name:{{$method}}<br/>
                    @endisset
                    @isset($path)
                    Path Method:{{$path}}<br/>
                    is Method: {{$pattern}}<br/>
                    URL method:{{$url}}<br/>
                    Full URL method:{{$fullUrl}}<br/>
                    FullUrlWithQuery:{{$fullUrlWithQuery}}<br/>
                    @endisset

          @if((Request::is('request/register/post')) || (Request::is('request/register')))
                   @isset($resultreg)
                   Name:{{$name}}<br/>
                   Username: {{$username}}<br/>
                   Password:{{$password}}<br/>
                   @endisset
          <form action = "{{route('request.register.post')}}" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name" /></td>
            </tr>
            <tr>
               <td>Username</td>
               <td><input type = "text" name = "username" /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type = "text" name = "password" /></td>
            </tr>
            <tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
            </tr>
         </table>
                    @endif
                    
                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

            
                
        </div>
@endsection