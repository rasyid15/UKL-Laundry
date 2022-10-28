<?php
if ($_POST) {
	$nama_paket = $_POST['nama_paket'];
	$harga = $_POST['harga'];

	if (empty($nama_paket || $harga)) {
		echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../html/tambah-paket.php';</script>";
	} else {
		include("./connection.php");
		$insert = mysqli_query($conn, "insert into paket (nama_paket, harga) value ('" . $nama_paket . "','" . $harga . "')");

		if ($insert) {
			echo "<script>alert('Sukses menambahkan paket');location.href='../html/order.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan paket silakan coba kembali!');location.href='../html/tambah-paket.php';</script>";
		}
	}
}