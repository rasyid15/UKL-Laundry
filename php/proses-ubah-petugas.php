<?php
if ($_POST) {
    $id = $_GET['id'];
    $nama_petugas = $_POST['nama_petugas'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    if (empty($nama_petugas || $alamat || $role || $password)) {
        echo "<script>alert('Harap semua data harus diisi!');location.href='../html/ubah-petugas.php?id=$id'</script>";
    } else {
        include("./connection.php");
        $query = "update petugas set nama_petugas='$nama_petugas',alamat='$alamat', role='$role', password='" . md5($password) . "' where id='$id'";
        $update = mysqli_query($conn, $query);
        if ($update) {
            echo "<script>alert('Sukses update data karyawan!');location.href='../html/list-petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal update data karyawan! silakan coba kembali!');location.href='../html/ubah-petugas.php?id=" . $id . "';</script>";
        }
    }
}