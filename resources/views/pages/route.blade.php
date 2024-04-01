@extends('layouts.default')
@section('title','Route Syntax')
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
            <td ><div><a href="{{route('route')}}/10/suganya/coimbatore">Optional Parameter with Regular Expression Constraints</a><br/>
             <a href="{{route('route_cid_check')}}/154">Regular expression globally for all route definitions(variablename=route_cid_check)</a><br/>
             <a href="{{route('tutorial.laravel2')}}/37">Route Groups with middleware</a><br/>
             <a href="{{route('client.bio1')}}">Route Groups with name space</a>
</div></td>
            <td><div><b>
                    @isset($id)
                    ID:{{$id}} <br/>
                    @endisset

                    @isset($name)
                    Name:{{$name}} <br/>
                    @endisset

                    @isset($location)
                    Location:{{ $location }} <br/>
                    @endisset

                    @isset($cid_check)
                    Route_cid_check:{{ $cid_check }} <br/>
                    @endisset

                    @isset($disname)
                    Tutorial Name:{{$disname}}<br/>
                    @endisset
                    @isset($token)
                     Result:{{$token}} <br/>
                    @endisset
                    @isset($result)
                     Result:{{$result}} <br/>
                    @endisset
                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

            
                
        </div>
@endsection