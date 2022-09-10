<?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){ // isset berfungsi untuk men check data yang diambil dari name simpan yang ada di button
        $id_pelanggan = $_POST['id_pelanggan']; // menyimpan id pelanggan
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telepon,  email) VALUES ('$id_pelanggan','$nama_pelanggan','$alamat','$telepon','$email')"; 
        $query = mysqli_query($connect, $sql); 
        if($query){ // kalau proses simpan berakhir
            header('Location: index.php'); // akan menuju index.php
        }else{ // kalau proses simpan gagal
            header('Location: simpan.php?status=gagal'); // status akan menjadi gagal
        }
    }
?>