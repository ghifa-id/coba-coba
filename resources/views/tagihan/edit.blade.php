<!DOCTYPE html>
<html>
<head>
    <title>Edit Tagihan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <h1>Edit Tagihan</h1>
    <form action="{{ route('tagihan.update', $tagihan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Pembacaan:</label>
        <select name="pembacaan_id" required>
            @foreach ($pembacaans as $pembacaan)
            <option value="{{ $pembacaan->id }}" {{ $pembacaan->id == $tagihan->pembacaan_id ? 'selected' : '' }}>
                Meteran: {{ $pembacaan->meteran->nomor_meteran }}, Pembacaan Sekarang: {{ $pembacaan->pembacaan_sekarang }}
            </option>
            @endforeach
        </select>
        <br>
        <label>Tanggal Tagihan:</label>
        <input type="date" name="tanggal_tagihan" value="{{ $tagihan->tanggal_tagihan }}" required>
        <br>
        <label>Jumlah Tagihan:</label>
        <input type="number" name="jumlah" value="{{ $tagihan->jumlah }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>