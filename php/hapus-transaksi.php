<?php
if ($_GET['id']) {
    include("./connection.php");

    $qry_hps_dtl_transaksi = mysqli_query($conn, "delete from detail_transaksi where id_transaksi='" . $_GET['id'] . "'");
    if ($qry_hps_dtl_transaksi) {
        $qry_hps_transaksi = mysqli_query($conn, "delete from transaksi where id='" . $_GET['id'] . "'");

        if ($qry_hps_transaksi) {
            echo "<script>alert('Hapus Data Transaksi Sukses!');location.href='../html/index.php';</script>";
        };
    } else {
        echo "<script>alert('Hapus Data Transaksi Gagal! silakan coba kembali!');location.href='../html/index.php';</script>";
    };
};