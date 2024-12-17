<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .dashboard-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            width: 200px;
        }
        .nav-menu {
            margin-bottom: 20px;
        }
        .nav-menu a {
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="nav-menu">
        <a href="{{ route('dashboard.index') }}">Dashboard</a>
        <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
        <a href="{{ route('meteran.index') }}">Meteran</a>
        <a href="{{ route('pembacaan.index') }}">Pembacaan</a>
        <a href="{{ route('tagihan.index') }}">Tagihan</a>
    </div>
    <div class="dashboard-container">
        <div class="dasboard-card">
            <h3>Jumlah Pelanggan</h3>
            <p>{{ $jumlah_pelanggan }}</p>
        </div>
        <div class="dashboard-card">
            <h3>Jumlah Meteran</h3>
            <p>{{ $jumlah_meteran }}</p>
        </div>
        <div class="dashboard-card">
            <h3>Jumlah Pembacaan</h3>
            <p>{{ $jumlah_pembacaan }}</p>
        </div>
        <div class="dashboard-card">
            <h3>Jumlah Tagihan</h3>
            <p>{{ $jumlah_tagihan }}</p>
        </div>
    </div>
</body>
</html>