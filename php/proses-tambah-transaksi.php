<?php
if ($_POST) {
    $qty = $_POST['qty'];
    $paket = $_POST['id_paket'];

    $member = $_POST['member'];
    $tanggal = $_POST['tanggal'];
    $batas_waktu = $_POST['batas_waktu'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $status = $_POST['status'];
    $status_pembayaran = $_POST['status_pembayaran'];

    session_start();
    $petugas = $_SESSION['id'];

    include_once('./connection.php');

    if (empty($member) || empty($tanggal) || empty($batas_waktu) || empty($tanggal_pembayaran) || empty($status) || empty($status_pembayaran)) {
        echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../html/order.php';</script>";
    } else {
        $insert_transaksi = mysqli_query($conn, "insert into transaksi (id_member, tanggal, batas_waktu, tanggal_pembayaran, status, status_pembayaran, id_petugas) value ('" . $member . "','" . $tanggal . "','" . $batas_waktu . "','" . $tanggal_pembayaran . "','" . $status . "','" . $status_pembayaran . "','" . $petugas . "')");

        if ($insert_transaksi) {
            echo "<script>alert('Transaksi Sukses!');location.href='../html/index.php';</script>";
        } else {
            echo "<script>alert('Transaksi Gagal! silakan coba kembali!');location.href='../html/order.php';</script>";
        };
    }

    $qry_dtl_transaksi = mysqli_query($conn, "select * from transaksi order by id desc limit 1");
    $dt_dtl_transaksi = mysqli_fetch_array($qry_dtl_transaksi);
    $id_transaksi = $dt_dtl_transaksi['id'];

    $insert_dtl_transaksi = mysqli_query($conn, "insert into detail_transaksi (id_transaksi, id_paket, qty) value ('" . $id_transaksi . "','" . $paket . "','" . $qty . "')");

    if ($insert_dtl_transaksi) {
        echo "<script>alert('Transaksi Sukses!');location.href='../html/order.php';</script>";
    } else {
        echo "<script>alert('Transaksi Gagal! silakan coba kembali!');location.href='../html/order.php';</script>";
    };
};