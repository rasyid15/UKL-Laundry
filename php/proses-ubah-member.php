<?php
if ($_POST) {
    $id = $_GET['id'];
    $nama_member = $_POST['nama_member'];
    $gender = $_POST['gender'];

    if (empty($nama_member || $gender)) {
        echo "<script>alert('Harap semua data harus diisi!');location.href='../html/ubah-member.php?id=$id'</script>";
    } else {
        include("./connection.php");
        $query = "update member set nama_member='$nama_member',gender='$gender'where id='$id'";
        $update = mysqli_query($conn, $query);
        if ($update) {
            echo "<script>alert('Sukses update member');location.href='../html/list-member.php';</script>";
        } else {
            echo "<script>alert('Gagal update member silakan coba kembali!');location.href='../html/ubah-member.php?id=" . $id . "';</script>";
        }
    }
}