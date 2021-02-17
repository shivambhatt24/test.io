<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "divorce";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo(" connected");
}
else
{
    echo("connection failed:".mysqli_connect_error());
}
?>