<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "demo";

$con = mysqli_connect($host, $username, $password, $db);

if ($con) {
    echo " ";
} else {
    echo "Connection failed: ";
}
