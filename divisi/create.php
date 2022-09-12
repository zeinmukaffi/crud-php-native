<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Divisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h3>Input Divisi</h3>
        <form method="post" action="">
            <!--   method post digunakan apabila ingin menambahkan data.
                                                        action hampir sama dengan include, yaitu membutuhkan.
                                                        form ini memerlukan mesin nya, yaitu simpan.php
                                                 -->
            <div class="row">
                <div class="col-4"><label class="form-label">ID Divisi : </label>
                    <input class="form-control" type="text" name="id_divisi">
                </div>
                <div class="col-4"><label class="form-label">Divisi : </label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="col-4"><label class="form-label">Gaji : </label>
                    <input class="form-control" type="number" name="gaji">
                </div>
            </div>
            <!-- didalam input, terdapat name
                 name harus memiliki nama yang sama seperti dengan field di table database
            -->
            <button type="submit" name="simpan" class="btn btn-primary mt-4">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>
<?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){ // isset berfungsi untuk men check data yang diambil dari name simpan yang ada di button
        $id_divisi = $_POST['id_divisi']; // menyimpan id pelanggan
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $sql = "INSERT INTO divisi (id_divisi, nama, gaji) VALUES ('$id_divisi','$nama','$gaji')"; 
        $query = mysqli_query($connect, $sql); 
        if($query){ // kalau proses simpan berakhir
            header('Location: index.php'); // akan menuju index.php
        }else{ // kalau proses simpan gagal
            header('Location: index.php?status=gagal'); // status akan menjadi gagal
        }
    }
?>