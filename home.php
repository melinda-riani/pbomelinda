<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pencatatan Barang</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0,0,0,0.4); 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }
        .modal-content img {
            max-width: 100%;
            height: auto;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
        }
    </style>
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
            <h2>Katalog Barang</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Contoh data barang dengan URL gambar.
                    $barang = [
                        ["nama" => "Dimsum", "jumlah" => 10, "harga" => 15000, "gambar" => "dimsum.jpg"],
                        ["nama" => "Ice cream", "jumlah" => 100, "harga" => 8000, "gambar" => "icecream.jpg"],
                        ["nama" => "Seblak jamur", "jumlah" => 50, "harga" => 10000, "gambar" => "seblak.jpg"],
                    ];

                    if (!empty($barang)) {
                        $no = 1;
                        foreach ($barang as $item) {
                            echo "<tr>
                                <td>{$no}</td>
                                <td>{$item['nama']}</td>
                                <td>{$item['jumlah']}</td>
                                <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>
                                <td><button class='btn-view' data-gambar='{$item['gambar']}'>Lihat Gambar</button></td>
                            </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data barang</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modal-image" src="" alt="Gambar Barang">
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("modal");
        const modalImage = document.getElementById("modal-image");
        const closeModal = document.querySelector(".close");

        document.querySelectorAll(".btn-view").forEach(button => {
            button.addEventListener("click", () => {
                const gambar = button.getAttribute("data-gambar");
                modalImage.src = gambar; // Set image source
                modal.style.display = "block"; // Show modal
            });
        });

        closeModal.addEventListener("click", () => {
            modal.style.display = "none";
        });

        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
</body>
</html>
