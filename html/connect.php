<?php
$server="localhost";
$username="root";
$password="";
$database="softproject";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "Database not connected";
}
?>