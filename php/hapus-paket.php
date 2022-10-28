<?php
if ($_GET['id']) {
    include "connection.php";
    $qry_hapus = mysqli_query($conn, "delete from paket where id='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses Hapus Paket');location.href='../html/order.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Paket');location.href='../html/order.php';</script>";
    }
}