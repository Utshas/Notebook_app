<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar  navbar-dark bg-primary row">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs col-xs-10" id="navbar-header">
            <a class="navbar-brand" href="/">NoteBook App</a>
            </div>
        <div class=" col-xs-2">
            @if(\Illuminate\Support\Facades\Auth::user())

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#fff;">
                    {{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

            @else
                    <a href="/login">Login</a> |
                    <a href="/register">Resgister</a>
                @endif
        </div>

    </nav>
    <!-- /navbar -->
    <!-- Main component for call to action -->
    @yield('content')
</div>
<!-- /container -->

<script src="dist/js/jquery3.min.js"></script>
<script src="dist/js/bootstrap.js"></script>
</body>

</html>