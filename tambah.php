<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Data gagal ditambahkan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style=background-color:slategray>
    <h1>TAMBAH KARYAWAN</h1>
    <div class="kotak">
        <form action="" method="post">
            <label for="name">Nama : </label>
            <br>
            <input type="text" name="name" class="inp">
            <br><br>
            <label for="email">Email : </label>
            <br>
            <input type="text" name="email" class="inp">
            <br><br>
            <label for="address">Address : </label>
            <br>
            <input type="text" name="address" class="inp">
            <br><br>
            <label for="gender">Gender : </label>
            <br>
            <input type="text" name="gender" class="inp">
            <br><br>
            <label for="position">Position : </label>
            <br>
            <input type="text" name="position" class="inp">
            <br><br>
            <label for="status">Status : </label>
            <br>
            <input type="text" name="status" class="inp">
            <br><br>
            <button type="submit" name="submit" class="btn btn-success">
                Tambah Data
            </button>
        </form>
        <br>
        <th><a href="index.php" class="btn btn-outline-secondary">Back</a></th>
        <br><br>
    </div>
</body>

</html>