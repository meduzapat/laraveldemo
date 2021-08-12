<!DOCTYPE html>
<html>
<head>
    <title>Laravel Demo for lightspeed - @yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <span class="navbar-brand">Manage</span>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li><a href="{{ route('tasks.index') }}">Tasks</a>
        </ul>
    </nav>
@show
    <div class="container">
        @yield('content')
    </div>
    <div style="margin-top:25%">
         Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</body>
</html>