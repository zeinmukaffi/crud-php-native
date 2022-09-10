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
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Data Pelanggan</h3>
        <h4><a href="create.html" class="btn btn-info text-white">Tambah [+]</a></h4> <!-- tombol tambah data -->
        <table border="1" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            <?php
        $sql = "SELECT * FROM pelanggan"; // variable sql biasanya berisikan query yang diperlukan
        $query = mysqli_query($connect,$sql);   // variable query berfungsi untuk menjalankan variable sql
                                                // variable connect adalah variable penghubung yang ada di koneksi.php oleh karena itu kita memerlukan koneksi.php dengan include
        while($pel = mysqli_fetch_array($query)){ // while adalah contoh perulangan yang tak terhitung
                                                  // mysqli_fetch_array berfungsi untuk mengambil data
                                                  // variable pel berisi data data yang diambil dari variable query
            echo "<tr>";
            echo "<td>".$pel['id_pelanggan']."</td>";
            echo "<td>".$pel['nama_pelanggan']."</td>";   
            echo "<td>".$pel['alamat']."</td>";
            echo "<td>".$pel['telepon']."</td>";
            echo "<td>".$pel['email']."</td>";
            echo "<td>";
            echo "<a class='btn btn-warning' href='edit.php?id_pelanggan=".$pel['id_pelanggan']."'>Edit</a> | ";
            echo "<a class='btn btn-danger' href='delete.php?id_pelanggan=".$pel['id_pelanggan']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            // echo berfungsi untuk menyetak data 
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