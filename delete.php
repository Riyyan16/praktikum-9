<?php

require 'Karyawan.php';

$id = $_GET["id"];

if (delete($id) > 0) {

    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'tabel.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'tabel.php';
        </script>
    ";
}
