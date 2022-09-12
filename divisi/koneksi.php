<?php
    $host = "localhost"; // phpmyadmin
    // variable adalah tempat menyimpan data/nilai
    $user = "root"; // root = username default localhost
    $password = ""; // kosongkan jika phpmyadmin tidak ada password
    $database = "db_karyawan"; // nama database
    $connect = mysqli_connect($host,$user,$password,$database) or die ('Gagal Menghubungkan')
    // $connect mengambil semua variable host,user,password,database
    // mysqli_connect berfungsi untuk menghubungkan project ke phpmyadmin
    // artinya, variable connect menghubungkan variable host,user,password,database ke phpmyadmin
    // or die berfungsi untuk menampilkan pesan error
?>