<?php
$servername="localhost";
$username="root";
$password="";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//die if connection was unsuccessful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful" . "<br>";
}

//CREATING A DATABASE
//$sql = "CREATE DATABASE SURVEY";
//$result = mysqli_query($conn, $sql);

//CHECK FOR DATABASE CREATION SUCCESS
//if ($result) {
   // echo "The database was created successfully";
//}

//SELECT THE NEW DATABASE
$conn->select_db("survey");
?>