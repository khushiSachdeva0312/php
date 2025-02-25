<?php
include 'connection.php';
//SELECT THE NEW DATABASE
//$conn->select_db("survey");

//CREATE TABLE
/*$sql = "create table emp5(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
emp_salary INT NOT NULL,primary key (id))";  
*/
$sql = "create table users_tables(id,first_name varchar(255) NOT NULL,last_name VARCHAR(255) NOT NULL,
gender VARCHAR(255),addres varchar(255),email varchar(255)primary key (id))";
$ress = mysqli_query($conn, $sql);

if ($ress) {

    echo "Table created successfully" . "<br>";
} else {

    echo "Error creating table: " .  mysqli_connect_error();
}




//CLOSE DATABASE CONNECTION

$conn->close();
?>
