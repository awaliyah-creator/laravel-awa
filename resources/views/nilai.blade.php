<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nama: {{ $nama }}<br>
    Mata Pelajaran: {{ $mapel }}<br>
    Nilai: {{ $nilai }}<br>
    Status: 
    @if ($nilai >= 75)
        Lulus
    @else
        Tidak Lulus
    @endif
</p>

</body>
</html>