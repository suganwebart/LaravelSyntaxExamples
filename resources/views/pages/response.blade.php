@extends('layouts.default')
@section('title','Response Syntax')
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
            <td ><div>
             <a href="{{route('response.basicresponse')}}">Basic Response</a><br/>
             <a href="{{route('response.attaching_headers')}}">Attaching Headers</a><br/>
             <a href="{{route('response.withcookie')}}">Attaching Cookies</a><br/>
             <a href="{{route('response.json')}}">JSON response</a><br/>
             <a href="{{route('response.htmlviewresponse')}}">HTML/View response</a><br/>
             <a href="{{route('response.redirectresponse')}}">Redirect response</a><br/>
             <a href="{{route('response.downloadresponse')}}">Download response</a><br/>
             <a href="{{route('response.fileresponse')}}">File response</a><br/>
</div></td>
            <td><div><b>
                    @isset($name)
                    name:{{$name}} <br/>
                    @endisset

               
                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

            
                
        </div>
@endsection