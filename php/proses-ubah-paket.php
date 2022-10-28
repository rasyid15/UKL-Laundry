<?php
if ($_POST) {
    $id = $_GET['id'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];

    if (empty($nama_paket || $harga)) {
        echo "<script>alert('Harap semua data harus diisi!');location.href='../html/ubah-paket.php?id=$id'</script>";
    } else {
        include("./connection.php");
        $query = "update paket set nama_paket='$nama_paket',harga='$harga'where id='$id'";
        $update = mysqli_query($conn, $query);
        if ($update) {
            echo "<script>alert('Sukses update paket');location.href='../html/order.php';</script>";
        } else {
            echo "<script>alert('Gagal update paket silakan coba kembali!');location.href='../html/ubah-paket.php?id=" . $id . "';</script>";
        }
    }
}