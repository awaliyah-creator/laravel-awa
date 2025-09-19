<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Nilai Siswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Nilai</th>
    </tr>
    @foreach ($siswa as $data)
        <tr>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['nilai'] }}</td>
        </tr>
    @endforeach
</table>

    Rata rata Nilai {{ number_format($rataRata, 2) }}<br>
    Status Kelas <strong>{{ $status }}</strong><br>

</body>
</html>