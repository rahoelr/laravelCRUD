<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>@yield('Title','Belajar Blade Templating New')</title>
    <style>
        .footer{
            margin-left: 3rem;
        }
        .container{
            padding-top: 1.5rem;
        }

        .well{
            margin-top: 1rem;
            border: 2px solid blue;
            border-radius: 6px;
            padding : 1rem;
        }

        .judul{
            margin-top: 1rem;
            text-align: center;
        }

        .containerHome{
            margin: 5rem 6rem 6rem 6rem;
            
        }

    </style>
</head>
<body>
    <!-- <nav>
        <li><a href="/home">Home</a></li>
        <li><a href="/kontak">Kontak</a></li>
        <li><a href="/about">About Uss</a></li>
    </nav> -->
    @include('layouts.navbar')
    @yield('konten')
    <br><br><br><br><br>
    @include('layouts.footer')
</body>
</html>