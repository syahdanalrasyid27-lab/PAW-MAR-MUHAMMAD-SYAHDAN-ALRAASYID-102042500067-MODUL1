<?php
$produk = [
    [
        "nama" => "Laptop Productivity",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 3
    ],
    [
        "nama" => "Monitor 24 inch",
        "kategori" => "Monitor",
        "harga" => 1800000,
        "stok" => 4
    ],
    [
        "nama" => "Keyboard Mechhanical",
        "kategori" => "Aksesoris",
        "harga" => 4500000,
        "stok" => 12
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris",
        "harga" => 2500000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gmaning",
        "kategori" => "Audio",
        "harga" => 6500000,
        "stok" => 5
    ],
    [
        "nama" => "Webcam Full HD",
        "kategori" => "Kamera",
        "harga" => 1200000,
        "stok" => 0
    ]
];

$jumlah_produk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content"width=device-width, initial-scale=1.0">
    <title>Katalog Cia Store</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            front-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color:
        }

        .nevbar {
            background-color:
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: conter;
            border-bottom: 1px solid 
        }

        .navbar h2 {
            color:
        }

        .navbar ul {
            List-style: none;
            display: flex;
            gap: 15px;
        }

        .navbar a {
            text-decoration: none;
        }
        
        .hero {
            backround-color:
            color: white
            padding: 40px 20px;
            text-align: center;
            margin: 20px;
            border-radius: 8px;
        }

        .hero h1 {
            margin-bottom: 10px;
        }

        .container {
            max-width: 100px;
            margin: 0 auto;
            padding: 20px;
        }

        .info-katalog {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .katlog-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid
            border-radius: 8px;
            padding: 15px;
            width: calc(33.333% -14px);
            box-shadow: 0 2px 4px rgba(0,0,0,0,05);
        }

        .kategori {
            font-size: 12px;
            color:
        }

        .nama-produk {
            font-size: 18px;
            margin: 5px 0 10px 0;
            colos:
        }

        badge-diskon {
            position: absolute;
            top: 10px;
            right:10px;
            background-color:
            color:white;
            padding: 3px 6px;
            font-size: 11px:
            birder-radius: 3px;
        }

        .harga-lama {
            text-decoration: Line-through;
            color:
            font-size: 13px;
        }

        .stok {
            font-size: 13px;
            margin: 8px;
        }

        .status {
            display: inline-block;
            padding: 3px 8px;
            font-size: 12px;
            border-radius: 4px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .tersedia {
            background-color: #d4edda;
            color: #155724;
        }

        .habis {
            background-color: #f8d7da;
            color: #721c24;
        }

        .btn-beli {
            display: block;
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        /* Footer */
        footer {
            background-color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            border-top: 1px solid #ccc;
        }

        /* Responsif Sederhana */
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 10px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <div class="navbar">
        <h2>Cia Store</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Katalog</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Selamat Datang di Cia Store</h1>
        <p>Penyedia perangkat dan aksesoris teknologi terlengkap.</p>
    </div>

    <!-- Container Utama -->
    <div class="container">
        
        <div class="info-katalog">
            <h3>Katalog Produk</h3>
            <p>Total Produk: <b><?php echo $jumlah_produk; ?></b></p>
        </div>

        <!-- Perulangan Produk -->
        <div class="katalog-grid">
            <?php foreach ($produk as $item) { 

                // Hitung Diskon (Challenge)
                if ($item['harga'] >= 1000000) {
                    $dapat_diskon = true;
                    $potongan = $item['harga'] * 0.10;
                    $harga_akhir = $item['harga'] - $potongan;
                } else {
                    $dapat_diskon = false;
                    $harga_akhir = $item['harga'];
                }
            ?>

                <div class="card">
                    <!-- Tampilkan badge jika diskon -->
                    <?php if ($dapat_diskon == true) { ?>
                        <span class="badge-diskon">Diskon 10%</span>
                    <?php } ?>

                    <p class="kategori"><?php echo $item['kategori']; ?></p>
                    <h4 class="nama-produk"><?php echo $item['nama']; ?></h4>

                    <!-- Harga -->
                    <div>
                        <?php if ($dapat_diskon == true) { ?>
                            <p class="harga-lama">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></p>
                        <?php } ?>
                        <p class="harga-baru">Rp <?php echo number_format($harga_akhir, 0, ',', '.'); ?></p>
                    </div>

                    <p class="stok">Stok: <?php echo $item['stok']; ?></p>

                    <!-- Cek Ketersediaan Stok -->
                    <?php if ($item['stok'] > 0) { ?>
                        <span class="status tersedia">Tersedia</span>
                        <button class="btn-beli">Beli Sekarang</button>
                    <?php } else { ?>
                        <span class="status habis">Stok Habis</span>
                        <button class="btn-beli btn-disabled" disabled>Stok Habis</button>
                    <?php } ?>

                </div>

            <?php } ?>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Cia Store. All rights reserved.</p>
    </footer>

</body>
</html>
    

    
    


