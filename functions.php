<?php
$conn = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $karyawans = [];

    while ($karyawan = mysqli_fetch_assoc($data)) {
        $karyawans[] = $karyawan;
    }
    return $karyawans;
}
//add data
function tambah($data)
{
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO karyawan VALUES ('', '$name','$email','$address','$gender','$position', '$status')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}
