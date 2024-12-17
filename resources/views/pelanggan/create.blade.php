<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat" required>
        <br>
        <label>No Hp:</label>
        <input type="text" name="no_hp" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>