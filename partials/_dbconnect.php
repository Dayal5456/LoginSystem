<?php
$server = "localhost";
$username = "root";
$password = "";
$database =  "user14";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn){
    echo "Success";
}
else{
    die("error" . mysqli_connect_error());
}
?>