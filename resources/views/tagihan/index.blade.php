<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tagihan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Daftar Tagihan</h1>
    <a href="{{ route('tagihan.create') }}">Tambah Tagihan</a>
    <table border="1">
        <tr>
            <th>Pembacaan</th>
            <th>Tanggal Tagihan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        @foreach ($tagihans as $tagihan)
        <tr>
            <td>{{ $tagihan->pembacaan->meteran->nomor_meteran }}</td>
            <td>{{ $tagihan->tanggal_tagihan }}</td>
            <td>{{ $tagihan->jumlah }}</td>
            <td>
                <a href="{{ route('tagihan.edit', $tagihan->id) }}">Edit</a>
                <form action="{{ route('tagihan.destroy', $tagihan->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>