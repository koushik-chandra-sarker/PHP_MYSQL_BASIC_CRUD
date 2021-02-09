<?php

include '../1_PhpMySqlConnection.php';
$getAllQuery = "Select * from user";

$data = mysqli_query($connection, $getAllQuery);
//$numberOfRow = mysqli_num_rows($data); // for number of row
//echo $numberOfRow;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include '../Link.php' ?>
    <style>
        .fa-edit {
            color: green;
            cursor: pointer;
        }

        .fa-trash-alt {
            color: crimson;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container card">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Update</th>
                    </th>
                    <th scope="col">Delete</th>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($result = mysqli_fetch_array($data)) {
                    ?>

                    <tr>
                        <th scope="row"> <?php echo $result['id']; ?></th>
                        <td><?php echo $result['Name']; ?></td>
                        <td><?php echo $result['Email']; ?></td>
                        <td><?php echo $result['Age']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $result['id']; ?>" title="Update">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>

                        <td>
                            <a href="delete.php?id=<?php echo $result['id']; ?>" title="Delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
