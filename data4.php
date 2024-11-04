<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM logout ORDER BY barcodeLogout DESC LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo $row["barcodeLogout"];
} else {3++-1
    echo "Error executing query: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
