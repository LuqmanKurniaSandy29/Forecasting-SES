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
        .btn {
            background-color: #ff7f50;
            color: #fff;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #ff6347;
            color: #fff;
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

    <div class="container">
        <h2>Perhitungan Metode Single Exponential Smoothing</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="alpha">Nilai Alpha (0.1 - 0.9)</label>
                <input type="number" step="0.1" min="0" max="0.9" class="form-control" id="alpha" name="alpha" placeholder="Masukkan nilai alpha">
            </div>
            <button type="submit" class="btn" name="submit">Proses</button>
        </form>
		
        <?php
        if (isset($_POST['submit'])) {
            $alpha = $_POST['alpha'];

            // Ambil data penjualan dari database
            $data_penjualan = [];
            $query = mysqli_query($db, "SELECT * FROM penjualan ORDER BY id_jual ASC") or die ("Gagal Query".mysqli_error());
            while ($hs = mysqli_fetch_array($query)) {
                $data_penjualan[] = $hs[4]; // Ambil hanya kolom penjualan
            }

            // Lakukan perhitungan single exponential smoothing
            $jumlah_data = count($data_penjualan);
            $forecast = [];
            $forecast[0] = $data_penjualan[0]; // Inisialisasi nilai forecast

            for ($i = 1; $i < $jumlah_data; $i++) {
                $forecast[$i] = $alpha * $data_penjualan[$i - 1] + (1 - $alpha) * $forecast[$i - 1];
			}
			// Hitung nilai peramalan untuk periode selanjutnya
			$next_forecast = $alpha * $data_penjualan[$jumlah_data - 1] + (1 - $alpha) * $forecast[$jumlah_data - 1];

            // Hitung Mean Squared Error (MSE)
            $sum_squared_error = 0;
            for ($i = 0; $i < $jumlah_data; $i++) {
                $sum_squared_error += pow(($data_penjualan[$i] - $forecast[$i]), 2);
            }
            $mse = $sum_squared_error / $jumlah_data;

            // Hitung Mean Absolute Percentage Error (MAPE)
            $sum_absolute_percentage_error = 0;
            for ($i = 0; $i < $jumlah_data; $i++) {
                $sum_absolute_percentage_error += abs(($data_penjualan[$i] - $forecast[$i]) / $data_penjualan[$i]);
            }
            $mape = ($sum_absolute_percentage_error / $jumlah_data) * 100;
        ?>
            <h3>Hasil Perhitungan Forecast dengan Metode Exponential Smoothing</h3>
            <table class="table">
                <tr align="center">
                    <th>No</th>
                    <th>Data Asli</th>
                    <th>Forecast</th>
                </tr>
                <?php
                for ($i = 0; $i < $jumlah_data; $i++) {
                ?>
                    <tr align="center">
                        <td><?= $i + 1 ?></td>
                        <td><?= $data_penjualan[$i] ?></td>
                        <td><?= number_format($forecast[$i], 2) ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
			    <!-- Hasil Peramalan untuk Periode Selanjutnya -->
				<h3>Peramalan untuk Periode Selanjutnya</h3>
                <p>Peramalan untuk periode selanjutnya adalah <?= number_format($next_forecast, 2) ?></p>
                <h3>Nilai Evaluasi</h3>
                <p>MSE: <?= number_format($mse, 2) ?></p>
                <p>MAPE: <?= number_format($mape, 2) ?>%</p>
			<div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var dataPenjualan = <?= json_encode($data_penjualan) ?>;
        var forecast = <?= json_encode($forecast) ?>;
        
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: Array.from(Array(dataPenjualan.length).keys()),
                datasets: [{
                    label: 'Data Asli',
                    data: dataPenjualan,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    fill: false
                }, {
                    label: 'Forecast',
                    data: forecast,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
        <?php
        }
        ?>
    </div><br><br><br>
</body>
</html>
