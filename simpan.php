<?php

extract($_GET);
extract($_POST);
include "koneksi.php";
if($simpan) {
	mysqli_query($db,"INSERT INTO penjualan (minggu, bulan, tahun, jumlah)
				VALUES ('$list_minggu','$list_bulan','$tahun','$jumlah')") or die ("Data gagal disimpan".mysqli_error());
	echo "<script> alert ('Data penjualan berhasil disimpan !!!')</script>";
	echo "<meta http-equiv=refresh content=0;url=\"input.php\">";
}