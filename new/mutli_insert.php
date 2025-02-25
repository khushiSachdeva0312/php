<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    throw new Exception(mysqli_connect_error());
} else {
    // $query = 'CREATE TABLE multi_users_jquery(id int(255)PRIMARY KEY AUTO_INCREMENT, name varchar(255), email varchar(255),address varchar(255), language varchar(255), gender varchar(255), phone int(10))';
    // $ress = mysqli_query($conn, $query);

    // if ($ress) {
    //     echo 'tabel created successfully';
    // } else {
    //     echo 'error occured';
    // }
}
try {
    if ($_POST) {
        // print_r($_POST['language']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $language = $_POST['language'];
        $gender = $_POST['gender'];
        $phone = $_POST['phoneno'];

        $sqlinsert = "INSERT INTO multi_users_jquery(`name`,`email`,`address`,`language`,`gender`,`phone`) VALUES ('$name','$email','$address','$language','$gender','$phone')";
        $insertresult = mysqli_query($conn, $sqlinsert);
        if ($insertresult) {
            $resonse = array('status' => 'success', 'data' => 'inserted successfuly');
        } else {
            $resonse = array('status' => 'failed', 'data' => 'error inserting data');
        }
    }
} catch (Exception $ex) {
    $resonse = array('status' => 'fail', 'data' => $ex->getMessage());
}
echo json_encode($resonse);
