<?php
    include 'koneksi.php';
    if(isset($_GET['id_divisi'])){
        header('Location: index.php');
    }

    $id_divisi = $_GET['id_divisi'];
    $sql = "DELETE FROM divisi WHERE id_divisi='$id_divisi'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location: index.php');
    }else{
        header('Location: delete.php?status=gagal');
    }
?>