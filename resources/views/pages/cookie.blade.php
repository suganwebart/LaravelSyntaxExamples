@extends('layouts.default')
@section('title','Cookie Syntax')
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
            <td ><div><a href="{{route('cookie.settingcookie')}}">Setting Cookies</a><br/>
             <a href="{{route('cookie.retrievingcookie')}}">Retrieving Cookies</a><br/>
             <a href="{{route('cookie.cookiecontroller.set')}}">Setting Cookies using controller</a><br/>
             <a href="{{route('cookie.cookiecontroller.get')}}">Retrieving Cookies using controller</a><br/>
             <a href="{{route('cookie.encryptedcookie')}}">Encrypted Cookies</a><br/>
             <a href="{{route('cookie.decryptedcookie')}}">Decrypted Cookies</a><br/>
             <a href="{{route('cookie.deletingcookie')}}">Deleting Cookies</a><br/>
            
</div></td>
            <td><div><b>
                    @isset($withCookiename)
                    cookie value:{{$withCookiename}} <br/>
                    @endisset
                    @isset($using_the_cookie_facade)
                    cookie value:{{$using_the_cookie_facade}} <br/>
                    @endisset
                    @isset($forevercookiename)
                    cookie value:{{$forevercookiename}} <br/>
                    @endisset
                    @isset($cookiecontroller_name)
                    cookiecontroller  value:{{$cookiecontroller_name}} <br/>
                    @endisset
                    @isset($decryptedcookie_name)
                    Encrypted Cookie value:{{$decryptedcookie_name}} <br/>
                    @endisset

               
                </b>
            </div></td>
            
        </tr>
        
    </tbody>
</table>

            
                
        </div>
@endsection