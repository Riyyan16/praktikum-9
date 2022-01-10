<?php

require 'Karyawan.php';

$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Karyawan</title>

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>

</head>

<body>
    <h1>Tabel Karyawan</h1>

    <a href="form.php">Tambah Data</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                No.
            </th>
            <th>Penghapusan data</th>
            <th>Nama</th>
            <th>Email</th>
            <th>address</th>
            <th>gender</th>
            <th>Position</th>
            <th>Status</th>

        </tr>

        <?php foreach ($karyawan as $item) : ?>
            </tr>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><a href="delete.php?id=<?= $item["id"]; ?>" onclick="return confirm('apakah anda yakin?')">Delete</a></td>
                <td><?= $nama["nama"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["position"] ?></td>
                <td><?= $item["status"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>