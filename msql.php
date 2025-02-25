<?php

echo"sql";

$servername="localhost";

$username="root";

$password="";

echo"<br>";

$sql = mysqli_connect($servername ,$username ,$password);




if($sql)

{

    echo"done";

}

else

{

   echo"not";

}

$sql->query("CREATE DATABASE college");

$sql->query("CREATE TABLE STUDENTS( st_id varchar(20)  Name char(20) department varchar(20) )");

$sql->query("INSERT INTO STUDENTS(st_id , Name ,department)");





?>