<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        header('Location: index.php');
    }

    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: delete.php?status=gagal');
    }
?>