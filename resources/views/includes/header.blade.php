<header>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Laravel Tutorial</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Basics</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('route')}}">Routing</a></li>
                                <li><a class="dropdown-item" href="{{route('middleware')}}">Middleware</a></li>
                                <li><a class="dropdown-item" href="{{route('request.requesthome')}}">Request</a></li>
                                <li><a class="dropdown-item" href="{{route('response.responsehome')}}">Response</a></li>
                                <li><a class="dropdown-item" href="{{route('session.sessionhome')}}">Session</a></li>
                                <li><a class="dropdown-item" href="{{route('cookie.cookiehome')}}">Cookies</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MVC</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('controllers.basic')}}">Controller</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="{{route('blade_views.blade_views_home')}}">Views</a></li>
                                <li><a class="dropdown-item" href="{{route('blade_template.blade_template_home')}}">Blade Template</a></li>
                                <li><a class="dropdown-item" href="{{route('blade_template.master_layout')}}">Template Inheritence</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="{{route('html_form.html_form_home')}}">Forms</a></li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>