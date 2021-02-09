<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormDataToMySql</title>
    <?php include "../Link.php" ?>
    <style>
        body {
            height: 100vh;
            width: 100vw;
        }

        .form_content {
            height: 100%;
        }


    </style>
</head>
</head>
<body>

<div class="row form_content d-flex justify-content-center align-items-center">
    <div class="col-6">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1">

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" value="submit" class="btn btn-primary form-control"/>
            </div>
            <div class="mb-3">
                <a class="btn btn-primary form-control" href="display.php">Display all user</a>
            </div>

        </form>
    </div>
</div>

</body>
</html>

<?php
include '../1_PhpMySqlConnection.php';
//$username = "root";
//$password = "";
//$server = "localhost";
//$database= "php_mysql";
//
//$connection = mysqli_connect($server,$username,$password,$database);
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $insertQuery = "INSERT INTO user(Name, Email, Age) VALUES ('$name','$email', '$age')";

    $ref = mysqli_query($connection, $insertQuery);
    if ($ref) {
        ?>
        <script>
            alert("Data Inserted Successful.")
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Data not Inserted.")
        </script>
        <?php
    }

}


?>