<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Subtotal</th>
    </tr>
    @php $total = 0; @endphp
    @foreach ($barang as $item)
        @php $subtotal = $item['harga'] * $item['qty']; $total += $subtotal; @endphp
        <tr>
            <td>{{ $item['nama'] }}</td>
            <td>Rp {{ number_format($item['harga']) }}</td>
            <td>{{ $item['qty'] }}</td>
            <td>Rp {{ number_format($subtotal) }}</td>
        </tr>
    @endforeach
</table>
    <br><strong>Total Harga: Rp {{ number_format($total) }}</strong>
</body>
</html>