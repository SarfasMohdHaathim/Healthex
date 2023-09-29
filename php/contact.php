<?php
include '../admin/php/db_conn.php';

    $name = $_POST['con_name'];
    $email = $_POST['con_email'];
    $Phone = $_POST['con_num'];
    $message=$_POST['con_message'];
	$message=str_replace("'", "''", $message);
    
    $date=date("Y/m/d");
    $sql1="CREATE TABLE if not exists contact(id INT AUTO_INCREMENT primary key NOT NULL,name TEXT,email TEXT ,phone TEXT,message TEXT,date DATE);";
    $res = mysqli_query($conn, $sql1);
    $sql = "INSERT INTO contact(name,email,message,date,phone) 
    VALUES('$name','$email','$message','$date','$Phone')";
    $result = mysqli_query($conn, $sql);
    

    if($result){
        header("Refresh:0; url=index.php");
    header("Location:../index.php");

    }
?>
