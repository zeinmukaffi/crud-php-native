<?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){ // isset berfungsi untuk men check data yang diambil dari name simpan yang ada di button
        $id_karyawan = $_POST['id_karyawan']; // menyimpan id pelanggan
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $id_divisi = $_POST['id_divisi'];
        $sql = "INSERT INTO pegawai (id_karyawan, nama_pegawai, alamat, telepon,  email, id_divisi) VALUES ('$id_karyawan','$nama_pegawai','$alamat','$telepon','$email','$id_divisi')"; 
        $query = mysqli_query($connect, $sql); 
        if($query){ // kalau proses simpan berakhir
            header('Location: index.php'); // akan menuju index.php
        }else{ // kalau proses simpan gagal
            header('Location: simpan.php?status=gagal'); // status akan menjadi gagal
        }
    }
?>