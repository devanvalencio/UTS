<?php
$servername = "172.18.0.2";
$username = "root";
$password = "123";
$dbname = "Redlock";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo mysqli_num_rows($result)."<br>";

mysqli_close($conn);
?>
