<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <style>
        .nav-link{
            color: grey;
        }

        .nav-link:hover{
            color:red;
            text-decoration: underline;

        }

       .bg-custom{
        background-color: lightgrey;
       }

    </style>

</head>
<body>
    <div class='container-fluid'>
        @include('layout.menu')
        <div class="bg-custom">
            @yield('content')
        </div>
        @include('layout.footer')
        
    </div>
</body>
</html>