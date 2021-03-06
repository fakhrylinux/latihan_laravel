<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/data-siswa') }}">Data Siswa</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/info-kegiatan') }}">Info Kegiatan</a>
            </li>
        </ul>
    </nav>
    @yield('content')

    <footer class="fixed-bottom bg-primary">
        <div class="text-center">
            (c) 2020 Copyright : SMA 404
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
