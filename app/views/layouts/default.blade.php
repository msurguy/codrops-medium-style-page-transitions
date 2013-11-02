<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    {{ HTML::style('css/bootstrap.min.css')}}
</head>
<body class="g-body">
    <div class="container">
        @yield('content')
    </div>
    {{ HTML::script('js/vendor/jquery-1.9.1.min.js')}}
    {{ HTML::script('js/vendor/bootstrap.min.js')}}
</body>
</html>
