<?php
include '../1_PhpMySqlConnection.php';
$id = $_GET['id'];

$deleteQuery = "delete from user where id = {$id}";

$res = mysqli_query($connection, $deleteQuery);

if ($res) {
    ?>
    <script>
        alert("Deleted Successful.")
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Something Went Wrong!")
    </script>
    <?php
}
header('location:display.php'); // after delete redirect to display.php page

?>