<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstraP.min.css')}}">
    <title>@yield('title','main')</title>
</head>
<body>
    @yield('content')
    
    <footer style="margin-top: 40%;">
        <p class="text-center bg-danger">This is my footer</p>
    </footer>
   <script src="{{asset('js/bootstrap.min.js')}}"></script> 
</body>
</html>