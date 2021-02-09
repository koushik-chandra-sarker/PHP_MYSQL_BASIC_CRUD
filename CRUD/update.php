<?php
include '../1_PhpMySqlConnection.php';
$id = $_GET['id'];

$getOneQuery = "Select * from user where id = {$id}";

$data = mysqli_query($connection, $getOneQuery);

$result = mysqli_fetch_array($data);

?>

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
    <div class="col-6 card">
        <form method="post">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="<?php echo $result['Email']; ?>" class="form-control" id="exampleInputEmail1">

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $result['Name']; ?>" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" value="<?php echo $result['Age']; ?>" class="form-control" id="age">
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
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $updateQuery = "UPDATE user SET Name='$name',Email='$email',Age='$age' WHERE id={$id}";

    $ref =  mysqli_query($connection,$updateQuery);
    if ($ref){
        ?>
        <script>
            alert("Data Update Successful.")
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Something is Wrong!")
        </script>
        <?php
    }

}



?>