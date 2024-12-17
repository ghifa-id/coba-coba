<!DOCTYPE html>
<html>
<head>
    <title>Edit Meteran</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Meteran</h1>
    <form action="{{ route('meteran.update', $meteran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Pelanggan:</label>
        <select name="pelanggan_id" required>
            @foreach ($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}" {{ $pelanggan->id ==  $meteran->pelanggan_id ? 'selected' : ''}}>
                    {{ $pelanggan->nama }}
                </option>
            @endforeach
        </select>
        <br>
        <label>Nomor Meteran:</label>
        <input type="text" name="nomor_meteran" value="{{ $meteran->nomor_metran }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>