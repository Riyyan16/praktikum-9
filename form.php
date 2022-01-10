<?php
require 'Karyawan.php';


if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 class="alert alert-warning text-center mt-2">Tambah Data</h2>
        <form>
            <div class="form-group mt-2">
                <label>Name</label>
                <input type="text" name="" class="form-control" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label>Email</label>
                <input type="text" name="" class="form-control" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label>Address</label>
                <input type="text" name="" class="form-control" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label>Gender</label>
                <br>
                <select name="gender" id="gender">
                    <option value="fulltime">Male</option>
                    <option value="parttime">Female</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label>Position</label>
                <input type="text" name="" class="form-control" placeholder="">
            </div>
            <div class="form-group mt-2">
                <label>Status</label>
                <br>
                <select name="status" id="status">
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">part time</option>
                </select>
                <br><br>
                <button type="submit" name="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>