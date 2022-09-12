<?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $id_karyawan = $_POST['id_karyawan'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $id_divisi = $_POST['id_divisi'];
        $sql = "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat='$alamat', telepon='$telepon', email='$email', id_divisi='$id_divisi' WHERE id_karyawan='$id_karyawan' ";
        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: index.php');
        }else{
            header('Location: update.php?status=gagal');
        }
    }
?>