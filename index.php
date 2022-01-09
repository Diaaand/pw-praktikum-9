<?php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style=background-color:slategray>
    <h1>DAFTAR KARYAWAN</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th>
                No.
            </th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th><a href="tambah.php" class="btn btn-outline-primary">Tambah Karyawan</a></th>
        </tr>

        <?php foreach ($karyawan as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["position"] ?></td>
                <td><?= $item["status"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-outline-danger">Hapus</a></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>