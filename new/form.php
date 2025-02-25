<style>
    #myform{
        border: 1px solid #000;
        padding: 20px;
        text-align: center;
        background: aliceblue;
    }
    #myform label {
        padding: 0px 4px 0px 4px;
    }
    #myform input {
        margin: 10px;
    }
    .content{
        margin-left: 30%;
    }
    .mtable {
        border: 1px solid #000;
        padding: 5px;
    }
    .mtable td, th {
        border: 1px solid #000;
        padding: 5px;
    }
</style>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    throw new Exception(mysqli_connect_error());
} else {
    // $query = 'CREATE TABLE users(name varchar(255), gender varchar(255),email varchar(255),password varchar(255), language varchar(255), address varchar(255))';
    // $ress = mysqli_query($conn, $query);

    // if($ress){
    //     echo 'tabel created successfully';
    // }else{
    //     echo 'error occured';
    // }
}
    // Turn off error reporting
    error_reporting(0);
    // print_r($_GET);
    $id= $_GET['id'];
    // echo $id;
    if($id){
    $delete = 'DELETE FROM users WHERE id = ' . $id;
    $delresult = mysqli_query($conn, $delete);
    }

    if($_GET['uid']){
        $sql = 'SELECT * FROM users WHERE id = '.$_GET['uid'];
        $result = mysqli_query($conn, $sql);
        $formField = mysqli_fetch_assoc($result);
    }
    
if ($_POST) {
    // print_r($_POST['language']);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword = $_POST['confirm_password'];
    $language = implode(',', $_POST['language']);
    $address = $_POST['address'];
    $npass = md5($password);

    if ($password == $Cpassword) {
        $sql = 'SELECT * FROM users WHERE email = "' . $email . '"';
        $result = mysqli_query($conn, $sql);
        $datacheck = mysqli_fetch_assoc($result);
        if($datacheck['email'] == $email){
           $sqlquery = "UPDATE users SET name = '$name', gender = '$gender', email = '$email', password = '$password', language = '$language', address = '$address' WHERE email = '$email'";
            $updateresult = mysqli_query($conn, $sqlquery);
            if ($updateresult) {
                echo 'data updated successfully';
            } else {
                echo 'error updating data';
            }
        }else{
            $sqlinsert = "INSERT INTO users(`name`, `gender`,`email`,`password`,`language`, `address`) VALUES ('$name','$gender','$email','$npass','$language','$address')";
            $insertresult = mysqli_query($conn, $sqlinsert);
            if ($insertresult) {
                echo 'data inserted successfully';
            } else {
                echo 'error inserting data';
            }
        }
    } else {
        echo "password doesn't match";
    }
}

?>

<form action="" class="form-group" id="myform" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name" placeholder= "enter name" value="<?php echo @$formField['name']; ?>"required /><br>

    <label for="gender">Gender:</label><br>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="Female">Female</label>
    <input type="radio" name="gender" id="female" value="female"><br>

    <label for="email">Email :</label><br>
    <input type="email" name="email" placeholder= "enter email" value="<?php echo @$formField['email'];?>" required /><br>

    <label for="password">Password :</label><br>
    <input type="password" name="password" placeholder="Enter Password" required /><br>

    <label for="confirm_password">Confirm Password :</label><br>
    <input type="password" name="confirm_password" placeholder="Enter Password" required /><br>

    english<input type="checkbox" name="language[]" value="english">
    hindi<input type="checkbox" name="language[]" value="hindi">
    punjabi<input type="checkbox" name="language[]" value="punjabi"><br>

    <label for="address">Address</label><br>
    <input type="text" name="address" placeholder= "enter address" value="<?php echo @$formField['address']; ?>" required /><br>
    <button type="submit">submit</button>
</form>


<div class="content">
    <table class="mtable">
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Language</th>
            <th>Address</th>
        </tr>
        <?php
        $count = 1;
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr><td align="center"><?php echo $row["id"]; ?></td>
                <td align="center"><?php echo $row["name"]; ?></td>
                <td align="center"><?php echo $row["gender"]; ?></td>
                <td align="center"><?php echo $row["email"]; ?></td>
                <td align="center"><?php echo $row["language"]; ?></td>
                <td align="center"><?php echo $row["address"]; ?></td>
                
                <td align="center"><button class="delete"  id=<?php echo $row["id"]; ?>><a href='form.php?id=<?php echo $row["id"]; ?>'>Delete</a></button>
                <td align="center"><button class="edit"  id=<?php echo $row["id"]; ?>><a href='form.php?action=edit&uid=<?php echo $row["id"]; ?>'>Edit</a></button>
                </td>
                </tr>
                <?php  $count++;
            }
        ?>
    </table>
</div>

