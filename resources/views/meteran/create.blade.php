<!DOCTYPE html>
<html>
<head>
    <title>Tambah Meteran</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Meteran</h1>
    <form action="{{ route('meteran.store') }}" method="POST">
        @csrf
        <label>Pelanggan:</label>
        <select name="pelanggan_id" required>
            @foreach ($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
            @endforeach
        </select>
        <br>
        <label>Nomor Meteran:</label>
        <input type="text" name="nomor_meteran" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>