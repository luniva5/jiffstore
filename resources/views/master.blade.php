<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"/>
    <!--icons-->
    <script src="https://kit.fontawesome.com/d3fd199152.js" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('layout.header')}} 
    <div>
    @yield('content')
    </div>
    {{View::make('layout.footer')}}
</body>
</html>