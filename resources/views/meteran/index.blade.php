<!DOCTYPE html>
<html>
<head>
    <title>Daftar Meteran</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Daftar Meteran</h1>
    <a href="{{ route('meteran.create') }}">Tambah Meteran</a>
    <table border="1">
        <tr>
            <th>Pelanggan</th>
            <th>Nomor Meteran</th>
            <th>Aksi</th>
        </tr>
        @foreach($meterans as $meteran)
        <tr>
            <td>{{ $meteran->pelanggan->nama }}</td>
            <td>{{ $meteran->nomor_meteran }}</td>
            <td>
                <a href="{{ route('meteran.edit', $meteran->id) }}">Edit</a>
                <form action="{{ route('meteran.destroy', $meteran->id) }}" method="POST" style="display:inline;">
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