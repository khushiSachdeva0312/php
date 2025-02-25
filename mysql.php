<?php
// echo "Welcome to the stage where we are ready to get connected to a database" . "<br>";

// //Connecting to the database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "school";

// //create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// //die if connection was unsuccessful

// if (!$conn) {
//     die("Sorry we failed to connect :" . mysqli_connect_error());
// } else {
//     echo "Connection was successful" . "<br>";
// }

// //CREATING A DATABASE
// $sql = "CREATE DATABASE SCHOOL";
// $result = mysqli_query($conn, $sql);

// //CHECK FOR DATABASE CREATION SUCCESS

// if ($result) {
//     echo "The database was created successfully";
// }

// //SELECT THE NEW DATABASE
// $conn->select_db("school");

// //CREATE TABLE
// $sql = "CREATE TABLE classtb(

//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
//     name VARCHAR(30) NOT NULL,
    
//     email VARCHAR(50),
    
//     age INT(3)

//     )";

// $ress = mysqli_query($conn, $sql);

// if ($ress) {

//     echo "Table created successfully" . "<br>";
// } else {

//     echo "Error creating table: " .  mysqli_connect_error();
// }

// //INSERT DATA IN TABLE

// $sqldata = "INSERT INTO classtb(name, email,age)

// VALUES ('john','john@example.com','18')";

// $resu = mysqli_query($conn, $sqldata);

// if ($resu) {
//     echo "data insert successfully" . "<br>";
// } else {
//     echo "Error creating table:" . mysqli_connect_error();
// }

// $sqldata = "INSERT INTO classtb(name, email,age)

// VALUES ('daniel','d@example.com','18')";

// $resu = mysqli_query($conn, $sqldata);

// if ($resu) {
//     echo "data insert successfully" . "<br>";
// } else {
//     echo "Error creating table:" . mysqli_connect_error();
// }


// //CLOSE DATABASE CONNECTION
// $conn->close();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE classtb SET email='abc123@example.com' WHERE id=6";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>