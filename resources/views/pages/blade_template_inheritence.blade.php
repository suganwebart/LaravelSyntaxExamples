@extends('pages.blade_template_master_layout')  
            @isset($child_layout_js)
            @section('content')  
            child_layout_js
            <h1>Contact Page </h1> 
            @stop  
            @section('footer')  
            <script> alert("Hello JavaTpoint") </script>      
            @stop  
            @section('sidebar')  
            sidebarrrrrrr     
            @stop 
            @endisset

            @isset($child_layout_at_parent_dir)
            child_layout_at_parent_dir
            @section('title', 'Page Title')
            @section('sidebar')
                @parent
            <p>This is appended to the master sidebar.</p>
            @endsection
            @section('content')
                <p>This is my body content.</p>
            @endsection
            @endisset

 
