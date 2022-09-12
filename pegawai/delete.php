<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        header('Location: index.php');
    }

    $id_karyawan = $_GET['id_karyawan'];
    $sql = "DELETE FROM pegawai WHERE id_karyawan='$id_karyawan'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: delete.php?status=gagal');
    }
?>