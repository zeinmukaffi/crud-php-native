<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h3>Input Data Pegawai</h3>
        <form method="post" action="simpan.php"> <!--   method post digunakan apabila ingin menambahkan data.
                                                        action hampir sama dengan include, yaitu membutuhkan.
                                                        form ini memerlukan mesin nya, yaitu simpan.php
                                                 -->
            <div class="row mt-4">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6"><label class="form-label">ID Pegawai : </label>
                            <input class="form-control" type="text" name="id_karyawan"></div>
                        <div class="col-6"><label class="form-label">Divisi</label>
                            <select class="form-select" name="id_divisi">
                                <option>---</option>
                                <?php
                                    include 'koneksi.php';
                                    $sql = "SELECT * FROM divisi";
                                    $query = mysqli_query($connect,$sql);
                                    while($div = mysqli_fetch_array($query)){
                                        echo "<option value='$div[id_divisi]'>$div[nama]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6"><label class="form-label">Nama Pegawai : </label>
                    <input class="form-control" type="text" name="nama_pegawai"></div>
            </div>
            <div class="row mt-4">
                <div class="col-6"><label class="form-label">Alamat : </label>
                    <textarea style="height: 105px;" class="form-control" name="alamat"></textarea></div>
                <div class="col-6">
                        <div><label class="form-label">Telepon : </label>
                            <input class="form-control" type="number" name="telepon"></div>
                        <div><label class="form-label">Email : </label>
                            <input class="form-control" type="email" name="email"></div>
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