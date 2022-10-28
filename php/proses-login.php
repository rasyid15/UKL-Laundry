<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username || $password)) {
        echo "<script>alert('Tidak boleh kosong! Harap isi dengan lengkap!');location.href='../html/login.php';</script>";
    } else {
        include "./connection.php";
        $qry_login = mysqli_query($conn, "select * from petugas where username = '" . $username . "' and password = '" . md5($password) . "'");

        if (mysqli_num_rows($qry_login) > 0) {
            $data_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id'] = $data_login['id'];
            $_SESSION['nama_petugas'] = $data_login['nama_petugas'];
            $_SESSION['role'] = $data_login['role'];
            $_SESSION['status_login'] = true;

            switch ($_SESSION['role']) {
                case 'admin':
                    header("location:../html/index.php");
                    break;
                case 'petugas':
                    header("location:../html/index-kasir.php");
                    break;
                case 'owner':
                    header("location:../html/index-owner.php");
                    break;
                default:
                    header("location:../html/login.php");
                    break;
            }
        } else {
            echo "<script>alert('Username dan Password tidak benar! silakan coba kembali!');location.href='../html/login.php';</script>";
        }
    }
}