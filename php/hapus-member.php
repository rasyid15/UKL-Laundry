<?php
if ($_GET['id']) {
    include "connection.php";
    $qry_hapus = mysqli_query($conn, "delete from member where id='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses Hapus Member');location.href='../html/list-member.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Member');location.href='../html/list-member.php';</script>";
    }
}