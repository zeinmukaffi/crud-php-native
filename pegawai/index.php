<?php
    include 'koneksi.php';  // include berarti memerlukan / membutuhkan 
                            // file ini memerlukan file koneksi.php
                            // koneksi.php  berfungsi untuk menghubungkan project ke phpmyadmin
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Data Pegawai</h3>
        <div class="d-flex">
            <h4><a href="create.php" class="btn btn-info text-white">Tambah [+]</a></h4> <!-- tombol tambah data -->
            <h4><a href="/karyawan" class="btn btn-success text-white ms-3">Back</a></h4>
        </div>
        <table border="1" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Divisi</th>
                    <th>Gaji</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $sql = "SELECT * FROM pegawai, divisi WHERE pegawai.id_divisi = divisi.id_divisi"; // variable sql biasanya berisikan query yang diperlukan
        $query = mysqli_query($connect,$sql);   // variable query berfungsi untuk menjalankan variable sql
                                                // variable connect adalah variable penghubung yang ada di koneksi.php oleh karena itu kita memerlukan koneksi.php dengan include
        while($pel = mysqli_fetch_array($query)){ // while adalah contoh perulangan yang tak terhitung
                                                  // mysqli_fetch_array berfungsi untuk mengambil data
                                                  // variable pel berisi data data yang diambil dari variable query
            echo "<tr>
                 <td>$pel[id_karyawan]</td>
                 <td>$pel[nama_pegawai]</td>   
                 <td>$pel[nama]</td>
                 <td>$pel[gaji]</td>
                 <td>
                 <a class='btn btn-warning' href='edit.php?id_karyawan=".$pel['id_karyawan']."'>Edit</a> |
                 <a class='btn btn-danger' href='delete.php?id_karyawan=".$pel['id_karyawan']."'>Hapus</a>
                 </td>
                 </tr>";
            // echo berfungsi untuk menyetak data 
            // titik (.) pada tag <a> line 49 & 50 berfungsi untuk menyambungkan $pel yang ada di perulangan. mengapa memerlukan (.) sedangkan yang lain seperti <td> tidak? karena kita menaruh perulangan $pel diluar tag <td> tetapi di dalam </td>, tetapi di tag <a> line 49 & 50 kita perlu menaruh perulangan $pel didalam tag <a> didalam href. apabila tidak menggunakan titik (.) maka akan terjadi error karena nantinya $pel akan tidak teridentifikasi sebagai perulangan
        }
        ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>