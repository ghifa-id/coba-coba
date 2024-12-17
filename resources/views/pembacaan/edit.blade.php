<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembacaan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Pembacaan</h1>
    <form value="{{ route('pembacaan.update', $pembacaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Meteran:</label>
        <select name="meteran_id" required>
            @foreach ($meterans as $meteran)
            <option value="{{ $meteran->id }}" {{ $meteran->id == $pembacaan->meteran_id ? 'selected' : ''}}>
                {{ $meteran->nomor_meteran }}
            </option>
            @endforeach
        </select>
        <br>
        <label>Tanggal Pembacaan:</label>
        <input type="date" name="tanggal_pembacaan" value="{{ $pembacaan->tanggal_pembacaan }}" required>
        <br>
        <label>Pembacaan Sebelumnya:</label>
        <input type="number" name="pembacaan_sebelumnya" value="{{ $pembacaan->pembacaan_sebelumnya }}" required>
        <br>
        <label>Pembacaan Sekarang:</label>
        <input type="number" name="pembacaan_sekarang" value="{{ $pembacaan->pembacaan_sekarang }}" required>
        <br>
        <button type="submit">Update</button>
</form>
</body>
</html>