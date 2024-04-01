@extends('layouts.default')
@section('title','Controller Syntax')
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
            <td ><div><a href="{{route('controllers.basic')}}">Creating Basic Controller</a><br/>
            <a href="{{route('controllers.parameters')}}/suganya">Passing Parameters to Controllers</a><br/>
            <a href="{{route('controllers.resourceonly.index')}}">Resource Controller(partial route method -> only index)</a><br/>
            <a href={{url("controllerdemo/resourceonly/9")}}>Resource Controller(partial route method -> only show)</a><br/>
            <a href={{url("controllerdemo/resourceexcept/9/edit")}}>Resource Controller(partial route method -> except (index, show, destroy))- edit</a><br/>
            <a href={{url("controllerdemo/resourceexcept/create")}}>Resource Controller(partial route method -> except) -create</a><br/>
            <a href={{route('controllers.resourcesnamechange.build')}}>Naming Resource for resource controller("build to create")</a><br/>
            <a href={{url("controllerdemo/singleactioncontroller/5")}}>Naming Resource Route Parameters</a><br/>
            <a href={{url("controllerdemo/singleactioncontroller/5")}}>SingleActionController</a><br/>
           <a href={{url("controllerdemo/groupcontroller1/")}}>GroupController</a><br/>
           <a href={{url("controllerdemo/groupcontrollerm1/")}}>Middleware to Controller using route</a><br/>
           <a href={{url("controllerdemo/groupcontrollerm2/")}}>Middleware to Controller using constructor</a><br/>
           <br/>
           <td><div> <b>
           @isset($result)
           Result:{{$result}} <br/>
           @endisset
           @isset($name)
           Parameter Name:{{$name}} <br/>
           @endisset
           @isset($id)
          Resources Parameter id:{{$id}} <br/>
           @endisset
           @isset($id2)
           SingleActionController Parameter id:{{$id2}} <br/>
           @endisset
           @isset($resultgc)
           GroupController Result:{{$resultgc}} <br/>
           @endisset
           
           
  </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>
           
            </div>
        </div>  
@endsection