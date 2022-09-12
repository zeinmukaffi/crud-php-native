<?php
    include 'koneksi.php';
    $id_divisi = $_GET['id_divisi'];
    $sql = "SELECT * FROM divisi WHERE id_divisi='$id_divisi'";
    $query = mysqli_query($connect,$sql);
    $div = mysqli_fetch_assoc($query);

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
    <title>Edit Divisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Update Divisi</h3>
        <form method="post" action="">
            <div class="row mt-4">
                <div class="col-4"><label class="form-label">ID Divisi : </label>
                        <input class="form-control" type="text" value="<?php echo $div['id_divisi']?>" name="id_divisi">
                    </div>
                    <div class="col-4"><label class="form-label">Divisi : </label>
                        <input class="form-control" type="text" value="<?php echo $div['nama']?>" name="nama">
                    </div>
                    <div class="col-4"><label class="form-label">Gaji : </label>
                        <input class="form-control" type="number" value="<?php echo $div['gaji']?>" name="gaji">
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
<?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $id_divisi = $_POST['id_divisi'];
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $sql = "UPDATE divisi SET nama='$nama', gaji='$gaji' WHERE id_divisi='$id_divisi'";
        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: index.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>