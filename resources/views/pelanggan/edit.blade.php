<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Pelanggan</h1>
    <form action="{{ route('pelanggan.update', $pelanggan-?id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pelanggan->nama }}" required>
        <br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $pelanggan->alamat }}" required>
        <br>
        <label>No Hp:</label>
        <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>