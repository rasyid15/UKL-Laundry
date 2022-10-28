<?php
if ($_POST) {
    $member = $_POST['member'];

    $batas_waktu = $_POST['batas_waktu'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $status = $_POST['status'];
    $status_pembayaran = $_POST['status_pembayaran'];

    include("./connection.php");

    if (empty($batas_waktu || $tanggal_pembayaran || $status || $status_pembayaran)) {
        echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../html/index.php';</script>";
    } else {
        $qry_member = mysqli_query($conn, "select id from member where username='" . $member . "'");
        $row_member = mysqli_fetch_array($qry_member);
        $id_member = $row_member['id'];

        $update_transaksi = mysqli_query($conn, "update transaksi set batas_waktu='$batas_waktu', tanggal_pembayaran='$tanggal_pembayaran', status='$status', status_pembayaran='$status_pembayaran' where id_member='$id_member'");

        if ($update_transaksi) {
            echo "<script>alert('Ubah Data Transaksi Sukses!');location.href='../html/index.php';</script>";
        } else {
            echo "<script>alert('Ubah Data Transaksi Gagal! silakan coba kembali!');location.href='../html/index.php';</script>";
        }
    };
}