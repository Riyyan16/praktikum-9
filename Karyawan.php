<?php

$conn = mysqli_connect("localhost", "root", "", "sql");

function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $karyawan = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
        $karyawan[] = $karyawan;
    }
    return $karyawan;
}

function add($data)
{
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO karyawan
                    VALUES
                    ('', '$nama', '$email', '$address', '$gender', $position', '$status')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}
