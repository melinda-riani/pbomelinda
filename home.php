<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pencatatan Barang</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>
<body>
    <div class="container">
        <nav>
            <a href="home.php">Home</a>
            <a href="dataBarang.php">Data Barang</a>
            <a href="dataCustomer.php">Data Customer</a>
        </nav>

        <h1>Selamat Datang di Aplikasi Pencatatan Barang</h1>
        <p>Ini adalah aplikasi sederhana untuk mencatat data barang dan pelanggan Anda. Anda dapat menggunakan navigasi di atas untuk mengelola data.</p>

        <div class="content">
            <h2>Fitur Utama</h2>
            <ul>
                <li>Tambah, dan hapus data barang</li>
                <li>Kelola data pelanggan</li>
                <li>Sistem navigasi sederhana dan mudah digunakan</li>
            </ul>

            <h2>Mulai Sekarang</h2>
            <p>Klik <a href="dataBarang.php" class="btn btn-add">Data Barang</a> untuk mulai menambahkan barang atau melihat daftar barang yang telah dicatat.</p>
        </div>
    </div>
</body>
</html>
