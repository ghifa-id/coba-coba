<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pembacaan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Daftar Pembacaan</h1>
    <a href="{{ route('pembacaan.create') }}">Tambah Pembacaan</a>
    <table border="1">
        <tr>
            <th>Meteran</th>
            <th>Tanggal Pembacaan</th>
            <th>Pembacaan Sebelumnya</th>
            <th>Pembacaan Sekarang</th>
            <th>Aksi</th>
        </tr>
        @foreach ($pembacaans as $pembacaan)
        <tr>
            <td>{{ $pembacaan->meteran->nomor_meteran }}</td>
            <td>{{ $pembacaan->tanggal_pembacaan }}</td>
            <td>{{ $pembacaan->pembacaan_sebelumnya }}</td>
            <td>{{ $pembacaan->pembacaan_sekarang }}</td>
            <td>
                <a href="{{ route('pembacaan.edit', $pembacaan->id) }}">Edit</a>
                <form action="{{ route('pembacaan.destroy', $pembacaaan->id) }}" methdo="POST" style="display:inline">
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