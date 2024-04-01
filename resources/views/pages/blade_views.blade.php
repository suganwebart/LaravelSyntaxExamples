@extends('layouts.default')
@section('title','Blade Views Syntax')
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
            <td ><div> <a href="{{route('blade_views.create_view_call_route')}}">Creating a view and call in route</a><br/>
            <a href="{{route('blade_views.create_view_call_controller')}}">creating a view and call in controller</a><br/>
            <a href="{{route('blade_views.passing_data_controller_array')}}">Passing Data to a view By using array</a><br/>
            <a href="{{route('blade_views.passing_data_controller_array_name')}}">Passing Data to a view By using the name array</a><br/>
            <a href="{{route('blade_views.passing_data_controller_with_method')}}/67">Passing Data to a view By using with() function</a><br/>
            <a href="{{route('blade_views.passing_data_controller_compact_single_method')}}/suganya">Passing Data to a view By using Single parameter compact() function</a><br/>
            <a href="{{route('blade_views.passing_data_controller_compact_multiple_method')}}/10/john/john123/">Passing Data to a view By using multiple parameter compact() function</a><br/>
            <a href="{{route('blade_views.sharing_data_with_all_views')}}">Sharing Data with all Views</a><br/>
            <a href="{{route('blade_views.nesting_view_detail')}}">Nesting the View</a><br/>
            <a href="{{route('blade_views.determining_the_existence_view')}}">Determining the existence of view</a><br/></td>
            <td><div><b>
           
            @isset($pagename)
            @if ($pagename === 'create_view_call_route')
            <h3>Hello, Laravel view route calling</h3>
            @elseif ($pagename === 'create_view_call_controller')
            <h3>Hello, Laravel view controller calling</h3>
            @else
                No post found!
            @endif
            @endisset

            @isset($datas)
            <h3>Array values Display1</h3>
            @foreach ($datas as $data)
            <p>{{ $data }}</p>
            @endforeach
            @endisset

            @isset($data2)
            <h3>Array values Display2</h3>
            <p>{{ $data2 }}</p>
            @endisset

            @isset($name1)
            <h3>Array values Display using name</h3>
            <p>{{ $name1 }}</p>
            <p>{{ $name2 }}</p>
            <p>{{ $name3 }}</p>
            @endisset

            @isset($id)
            <h3>ID Display using "with" method</h3>
            <p>id:{{ $id }}</p>
            @endisset

            @isset($name)
            <h3>Name Display using "compact" method</h3>
            <p>name:{{ $name }}</p>
            @endisset
                    
            @isset($idm)
            <h3>Display using "compact Multiple" method</h3>
            <p>id:{{ $idm }}</p>
            <p>name:{{ $namem }}</p>
            <p>password:{{ $passwordm }}</p>
            @endisset

            @isset($existence_view_checking_txt)
            <h3>Determining the existence of view</h3>
            <p>{{ $existence_view_checking_txt }}</p>
            @endisset

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