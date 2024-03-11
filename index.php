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
        .justify { 
            text-align: justify;
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
        <center>
        <h1>Selamat Datang di Aplikasi Peramalan Penjualan Tahu</h1>
        <h5>Di sini Anda dapat melihat prediksi penjualan tahu berdasarkan data yang telah dimasukkan sebelumnya</h5>
        <BR><BR>
        <P class="justify">Salah satu makanan khas dari Kabupaten Jombang adalah tahu. Berdasarkan SNI 01-3142-1998, tahu didefinisikan sebagai olahan makanan yang memiliki bentuk padat lunak yang berasal dari proses pengolahan kedelai (Glycine Species) yang dalam prosesnya terdapat pengendapan protein, dengan atau tanpa bahan lainnya yang diizinkan. UD. Bintang Jaya adalah satu perusahaan yang memproduksi tahu di Kabupaten Jombang, tepatnya di Dusun Tugu, Desa Sebani, Kecamatan Sumobito, Kabupaten Jombang. UD. Bintang jaya mulai berdiri sekitar tahun 2009. Setiap harinya UD. Bintang Jaya setiap harinya  memproduksi tahu untuk didistribusikan di dalam maupun luar kota. Harga kedelai sebagai bahan baku pembuatan tahu yang tidak menentu dapat menyebabkan kenaikan biaya produksi tahu. Hal ini dapat menyebabkan pabrik tahu menaikkan harga jual tahu, yang dapat menurunkan permintaan tahu. Permintaan tahu yang bersifat fluktuatif dapat menyebabkan kerugian finansial, kerusakan produk, dan penurunan kepuasan pelanggan. Untuk itu perlu dilakukan peramalan penjualan tahu yang akurat. Dengan melakukan peramalan untuk memprediksi penjualan akan memberikan hasil keputusan yang tepat bagi UD. Bintang Jaya, selain dapat menentukan jumlah produksi yang optimal, UD. Bintang Jaya dapat mekasimalkan pengeluaran biaya-biaya lain yang terkait dengan proses produksi tahu. Jadi hasil dari penelitian ini memiliki potensi untuk meningkatkan kinerja UD. Bintang Jaya secara keseluruhan.</P>
    </center>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
