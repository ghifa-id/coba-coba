<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tagihan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Tagihan</h1>
    <form action="{{ route('tagihan.store') }}" method="POST">
        @csrf
        <label>Pembacaan:</label>
        <select name="pembacaan_id" required>
            @foreach ($pembacaans as $pembacaan)
            <option value="{{ $pembacaan->id }}">
                Meteran: {{ $pembacaan->meteran->nomor_meteran }}, Pembacaan Sekarang: {{ $pembacaan->pembacaan_sekarang }}
            </option>
            @endforeach
        </select>
        <br>
        <label>Tanggal Tagihan:</label>
        <input type="date" name="tanggal_tagihan" required>
        <br>
        <label>Jumlah Tagihan:</label>
        <input type="number" name="jumlah" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>