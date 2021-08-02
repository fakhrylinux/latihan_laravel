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

    @extends('layouts.app')

    @section('content')
        <h3>Info Kegiatan</h3>
        <p>Informasi Kegiatan Siswa bulan ini:</p>
        <ul>
            <li>10 Agustus - Masa Orientasi Siswa</li>
            <li>17 Agustus - Upacara Kemerdekaan</li>
        </ul>
        <p>Informasi Kegiatan Siswa bulan depan:</p>
        <ul>
            <li>12 September - Ujian Tengah Semester</li>
        </ul>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
