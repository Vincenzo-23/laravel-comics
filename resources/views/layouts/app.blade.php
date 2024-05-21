<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        ul,menu{
            list-style: none;
            padding: 0;
        }
        body{
            background-color: rgb(63, 63, 63)
        }
        a{
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        .title{
            color: white;
            font-weight: 700;
            text-align: center;
        }
    </style>
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>

</html>