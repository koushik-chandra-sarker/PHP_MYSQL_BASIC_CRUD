<?php

$username = "root";
$password = "";
$server = "localhost";
$database= "php_mysql";

$connection = mysqli_connect($server,$username,$password,$database);
if ($connection){
    ?>
    <!--<script>
        alert("Database Connection Successful.")
    </script>-->
    <?php
}else{
?>
    <script>
        alert("Database Connection Failed.")
    </script>
<?php
}
?>