@extends('layouts.default')
@section('title','Middleware Syntax')
@section('main-content')
        <!-- Page content-->
        <div class="container">
            <div >
            <table class="table table-sm">
    <thead>
        <tr>
            <th>Names</th>
            <th>Result</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><div><a href="{{route('AgeMiddleware')}}/37">Age middleware for parameters passing through url</a><br/>
            <a href="{{route('IsAdminMiddleware')}}">Admin Login check Middleware</a><br/>
            <a href="{{route('role')}}">Passing variable from Role middleware to blade</a><br/>
            <a href="{{route('BeforeAfterMiddleware')}}">Before After middleware</a><br/>
           <a href="{{route('TerminableMiddleware')}}">TerminableMiddleware</a><br/></td>
            <td><div> <b>
           @isset($token)
           Result:{{$token}} <br/>
           @endisset
           @if(session()->get( 'is_admin_check' ))
           Result:{{session()->get( 'is_admin_check' )}} <br/>
           @endif
           @isset($role)
           Result:{{$role}} <br/>
           @endisset
           
  </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>
           
            </div>
        </div>  
@endsection