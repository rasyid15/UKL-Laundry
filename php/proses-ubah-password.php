<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
        include "./connection.php";
             $update_member=mysqli_query($conn,"update member set password ='".md5($password)."' where username = '".$username."' ") or die(mysqli_error($conn));
             $update_petugas=mysqli_query($conn,"update petugas set password ='".md5($password)."' where username = '".$username."' ") or die(mysqli_error($conn));
            if( $update_member || $update_petugas){
                echo "<script>alert('Sukses Mengubah Password');location.href='../html/login.php';</script>";
            } else {
                echo "<script>alert('Gagal Mengubah Password');location.href='../html/forgot-password.php?username=".$username."';</script>";
            }
        }
?>