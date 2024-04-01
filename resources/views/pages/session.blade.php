@extends('layouts.default')
@section('title','Session Syntax')
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
            <td ><div><a href="{{route('session.storesessionvalue')}}/suganya/john/">Store Session value</a><br/>
             <a href="{{route('session.retrievingsession')}}">Retrieving All Session Value</a><br/>
             <a href="{{route('session.deletingusersession')}}">Deleting user Session Value</a><br/>
             <a href="{{route('session.deletingallsession')}}">Deleting all Session Value</a><br/>
             
</div></td>
            <td><div><b>
            

                   Form Session value: {{ Session::get('user') }}<br/>
                   controller session value1:{{session('s_value1')}}<br/>
                   controller session value2:{{ Session::get('s_value2') }}<br/>
                   controller session user_info:@if (session('session_user'))
                    user session value:{{session('user')}} <br/>
                    @endif
                    @if (session('user_info'))
                    <br/>controller session array:<br/>
                    @foreach(Session::get('user_info') as $key => $node)
                    {{ $key }}:{{ $node }}<br/>
                    @endforeach
                    @endif
                    
                    
                    
               
                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

            <br/>
<form method="Post" action="{{route('session.storesession')}}" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

<div><label for="Name">Name</label>  
<input type="text" name="username"> </div><br/>  
<div><button type="submit">store in session </button></div>  
</form>  
                
        </div>
@endsection