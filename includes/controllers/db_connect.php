<?php
session_start();

    $dbhost = "localhost";
    $db = "SMS";
    $dbuser = "usuario";
    $dbpassword = "contraseña";

    $conn = mysqli_connect(
        $host,
        $dbuser,
        $dbpassword,
        $db
    );
?>