<?php
    include 'koneksi.php';
    $id_pelanggan = $_GET['id_pelanggan'];
    $sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    $query = mysqli_query($connect,$sql);
    $pel = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)< 1){
        die("Data Tidak Ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Update Data Pelanggan</h3>
        <form method="post" action="update.php">
            <div class="row mt-4">
                <div class="col-6"><label class="form-label">ID Pelanggan : </label>
                    <input class="form-control" type="text" value="<?php echo $pel['id_pelanggan']?>"
                        name="id_pelanggan"></div>
                <div class="col-6"><label class="form-label">Nama Pelanggan : </label>
                    <input class="form-control" type="text" value="<?php echo $pel['nama_pelanggan']?>"
                        name="nama_pelanggan"></div>
            </div>
            <div class="row mt-4">
                <div class="col-6"><label class="form-label">Alamat : </label>
                    <textarea style="height: 105px;" class="form-control"
                        name="alamat"><?php echo $pel['alamat']?></textarea></div>
                <div class="col-6">
                        <div><label class="form-label">Telepon : </label>
                            <input class="form-control" type="number" value="<?php echo $pel['telepon']?>"
                                name="telepon"></div>
                        <div><label class="form-label">Email : </label>
                            <input class="form-control" type="email" value="<?php echo $pel['email']?>" name="email">
                        </div>
                </div>
            </div>
            <!-- value adalah isi dari sebuah input
                 echo $pel['id_pelanggan']
                 artinya mencetak dari variable pel yang memiliki field id_pelanggan
            -->
            <button type="submit" name="simpan" class="btn btn-primary mt-4">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>