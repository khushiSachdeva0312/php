<?php
// echo "Welcome to the stage where we are ready to get connected to a database" . "<br>";

// //Connecting to the database
// $servername = "localhost";
// $username = "root";
// $password = "";

// //create a connection
// $conn = mysqli_connect($servername, $username, $password);

// //die if connection was unsuccessful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful" . "<br>";
// }

// //CREATING A DATABASE
// $sql = "CREATE DATABASE COLLEGE";
// $result = mysqli_query($conn, $sql);

// //CHECK FOR DATABASE CREATION SUCCESS
// if ($result) {
//     echo "The database was created successfully";
// }

// //SELECT THE NEW DATABASE
// $conn->select_db("college");

// //CREATE TABLE
// $sql = "CREATE TABLE lecture(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     age INT(3)
// )";

// $ress = mysqli_query($conn, $sql);

// if ($ress) {
//     echo "Table created successfully" . "<br>";
// } else {
//     echo "Error creating table: " . mysqli_connect_error();
// }

// //INSERT DATA IN TABLE
// $sqldata = "INSERT INTO lecture(name, email, age)
// VALUES ('test', 'test@example.com', '18')";
// $resu = mysqli_query($conn, $sqldata);

// if ($resu) {
//     echo "Data inserted successfully" . "<br>";
// } else {
//     echo "Error inserting data: " . mysqli_connect_error();
// }

// $sqldata = "INSERT INTO lecture(name, email, age)
// VALUES ('daniel', 'daniel@example.com', '18')";
// $resu = mysqli_query($conn, $sqldata);

// if ($resu) {
//     echo "Data inserted successfully" . "<br>";
// } else {
//     echo "Error inserting data: " . mysqli_connect_error();
// }

// UPDATE DATA IN TABLE
$sql = "UPDATE lecture SET email='abc123@example.com' WHERE id=6";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
