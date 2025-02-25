<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    throw new Exception(mysqli_connect_error());
} else {
    // $query = 'CREATE TABLE users_jquery(id int(255)PRIMARY KEY AUTO_INCREMENT, name varchar(255), email varchar(255),password varchar(255),address varchar(255))';
    // $ress = mysqli_query($conn, $query);

    // if($ress){
    //     echo 'tabel created successfully';
    // }else{
    //     echo 'error occured';
    // }
}
try{
    if ($_POST) {
        // print_r($_POST['language']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Cpassword = $_POST['cpassword'];
        $address = $_POST['address'];
        $npass = md5($password);
    
        if ($password == $Cpassword) {
            $sqlinsert = "INSERT INTO users_jquery(`name`,`email`,`password`,`address`) VALUES ('$name','$email','$npass','$address')";
            $insertresult = mysqli_query($conn, $sqlinsert);
            if ($insertresult) {
                $resonse = array('status'=>'success','data'=>'inserted successfuly');
            } else {
                $resonse = array('status'=>'failed','data'=>'error inserting data');
            }
        } else {
            $resonse = array("status"=>"failed","data"=>"password doesn't match");
        }
    }
}
catch (Exception $ex) {
    $resonse = array('status'=>'fail','data'=>$ex->getMessage());
}
echo json_encode($resonse);
?>