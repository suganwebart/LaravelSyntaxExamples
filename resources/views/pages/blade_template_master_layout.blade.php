@extends('layouts.default')
@section('title','Blade Template Inheritence')
@section('main-content')
        



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
            <td ><div> <a href="{{route('blade_template.master_layout')}}">Master Page Layout</a><br/>
            <a href="{{route('blade_template.child_layout_js')}}">Extend Master Layout(child layout) with java script code</a><br/>
            <a href="{{route('blade_template.child_layout_at_parent_dir')}}">Extend Master Layout(child layout) with at parent directives</a><br/>
           
            </div>
           </td>
            <td><div><b>

            @section('sidebar')
            This is the master sidebar content.<br/>
            This is the master sidebar.
            @show
            <div class="container">
                    @yield('content')
            </div>
            @yield('footer')  


            @isset($common_name_variable)
            <b>Sharing Data with all Views</b>
            <p>Common Variable Value:{{ $common_name_variable }}</p>
            @endisset

                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

          
                
        </div>
@endsection