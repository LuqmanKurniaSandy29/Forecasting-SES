<?php
extract($_GET);
extract($_POST);
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Peramalan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS untuk tampilan kustom */
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            margin-top: 30px;
        }
		.navbar {
            background-color: #ff7f50; /* Warna oranye */
        }
		.navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
            margin-left: 15px;
        }
        .form-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
		.table {
            width: 100%;
            border: 1px solid #dee2e6;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .btn-submit {
            background-color: #ff7f50;
            color: #fff;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #ff6347;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">UD. Bintang Jaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="input.php"><i class="fas fa-plus-circle"></i> Input Data Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_penjualan.php"><i class="fas fa-list"></i> Data Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peramalan.php"><i class="fas fa-chart-line"></i> Prediksi Penjualan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <table class="table">
            <tr align="center">
                <th>No</th>
                <th>Periode</th>
                <th>Penjualan</th>
            </tr>
            <?php
            $no= 0;
            $query = mysqli_query ($db, "SELECT * FROM penjualan ORDER BY id_jual ASC") or die ("Gagal Query".mysqli_error());
            while($hs = mysqli_fetch_array($query)){
                $no++;

                $minggu     = $hs[1];
                $bulan       = $hs[2];
                $tahun       = $hs[3];
                $jumlah     = $hs[4];
            ?>
            <tr align="center">
                <td><?=$no?>.</td>
                <td align="left"><?="Minggu ke-$minggu Bulan $bulan Tahun $tahun"?></td>
                <td><?=$jumlah?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
</body>
</html>
