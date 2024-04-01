@extends('layouts.default')
@section('title','blade Template Syntax')
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
            <td ><div> <a href="{{route('blade_template.blade_echoingdata')}}">Displaying data or Echoing data</a><br/>
            <a href="{{route('blade_template.blade_ternary_operator')}}">Ternary operator</a><br/>
            <a href="{{route('blade_template.blade_if_directive')}}">Blade If else endif directives</a><br/>
            <a href="{{route('blade_template.blade_elseif_directive')}}">Blade If elseif else endif directives</a><br/>
            <a href="{{route('blade_template.blade_unless')}}">Blade unless directives</a><br/>
            <a href="{{route('blade_template.blade_hassection_directive')}}">Blade hasSection directives</a><br/>
            <a href="{{route('blade_template.blade_loops_for_endfor')}}">Blade Loops for endfor directives</a><br/>
            <a href="{{route('blade_template.blade_foreach')}}">Blade Loops foreach endforeach directives</a><br/>
            <a href="{{route('blade_template.blade_while_endwhile')}}">Blade Loops while endwhile directives</a><br/>
            <a href="{{route('blade_template.include_other_views')}}">Including other views</a><br/>
            </div>
           </td>
            <td><div><b>
            @isset($blade_echoingdata)
            <b>Displaying data or Echoing data in blade and php method</b><br/><br/>
            <p>PHP Method::<?= $blade_echoingdata ?></p>
            <p>Blade Method::{{ $blade_echoingdata }}</p>
            @endisset

            @isset($blade_ternary_operator)
            <b>Ternary operator</b>
            <br/><br/>
            <p>PHP Method::<?= isset($blade_ternary_operator) ? $blade_ternary_operator: 'Empty variable' ?></p>
            <p>Blade Method::{{ $blade_ternary_operator!='' ?$blade_ternary_operator:'Empty variable' }}</p>
            @endisset

            @isset($blade_if_directive_id)
            @if(($blade_if_directive_id)==1)  
            student id is equal to 1.  
            @else  
            student id is not equal to 1  
            @endif  
            <br/><br/>
            @endisset

            @isset($blade_elseif_directive_post)
            @if (count($blade_elseif_directive_post) === 1)
                Single post!
            @elseif (count($blade_elseif_directive_post) > 1)
                Multiple posts!
            @else
                No post found!
            @endif
            <br/><br/>
            @endisset

            @isset($blade_unless_directive_id)
            @unless($blade_unless_directive_id==1)  
                student id is not equal to 1.  
            @endunless  
            @unless (Auth::check())
                You are not signed in.
            @endunless
            <br/><br/>
            @endisset

            @isset($blade_hassection_directive_id)
            @hasSection('title')  
            @yield('title') - App Name  <br/>
            @else  
            Name  
            @endif  

            @hasSection ('title')
                @yield('title') - Web App Name <br/>
            @else
                Web App Name
            @endif
            <br/><br/>
            @endisset


            @isset($blade_loops_for_endfor_id)
            @for ($i = 0; $i < 5; $i++)
            The current value of i is {{ $i }}<br/>
            @endfor

            <br/><br/>
            @endisset


            @isset($blade_foreach_students)
            @foreach($blade_foreach_students as $blade_foreach_students)  
            {{$blade_foreach_students}}<br>  
            @endforeach 
            <br/><br/>
            @foreach ($posts as $post=>$titles)
            {{ $post }}:{{ $titles }}<br/>
            @endforeach 
            <br/><br/>
            @endisset

            @isset($blade_while_endwhile_id)
            @while(($blade_while_endwhile_id)<15)  
            {{$blade_while_endwhile_id++}} :javatpoint <br/>
            @endwhile  
            <br/><br/>
            @endisset

            @isset($include_other_views)
            @include('pages.include_other_views')
            <br/><br/>
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