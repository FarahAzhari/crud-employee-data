<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 10%;
        }
        table tr th{
            color: #7a9192;
        }
        table tr.table-color{
            background-color: #e0eef1;
        }
        a.btn, table tr td a.btn{
            background-color: #fd7f72;
            color: white;
        }
    </style>
</head>

<body>
    <h2>CRUD DATA KARYAWAN PT ABC</h2>
    <br>
    <a href="create.php" class="btn">+Tambah Data</a>
    <br />
    <br />
    <table border="1" class="table">
        <tr class="table-color">
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from karyawan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['pekerjaan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id'];
                                            ?>" class="btn">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['id'];
                                            ?>" class="btn">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
</body>

</html>