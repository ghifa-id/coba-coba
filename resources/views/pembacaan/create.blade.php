<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembacaan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Pembacaan</h1>
    <form action="{{ route('pembacaan.store') }}" method="POST">
        @csrf
        <label>Meteran:</label>
        <select name="meteran_id" required>
            @foreach ($meterans as $meteran)
                <option value="{{ $meteran->id }}">{{ $meteran->nomor_meteran }}</option>
            @endforeach
        </select>
        <br>
        <label>Tanggal Pembacaan:</label>
        <input type="date" name="tanggal_pembacaan" required>
        <br>
        <label>Pembacaan Sebelumnya:</label>
        <input type="number" name="pembacaan_sekarang" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>