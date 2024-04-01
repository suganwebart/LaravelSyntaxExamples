@extends('layouts.default')
@section('title','Home')
@section('main-content')
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Nesting the View</h1>
                <p>Nested in following path</p>
                 <p>pages=>nesting_view=>nesting_view_detail.blade.php</p>
                    @isset($common_name_variable)
                    <h3>Sharing Data with all Views</h3>
                    <p>Common Variable Value:{{ $common_name_variable }}</p>
                    @endisset
            </div>
        </div>
@endsection