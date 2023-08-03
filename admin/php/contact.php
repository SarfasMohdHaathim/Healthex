<?php
include 'db_conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $Phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $date=date("Y/m/d");
    $sql1="CREATE TABLE if not exists contact(id INT AUTO_INCREMENT primary key NOT NULL,name VARCHAR(255),email VARCHAR(255) ,message TEXT,phone VARCHAR(255),subject VARCHAR(255),date DATE);";
    $res = mysqli_query($conn, $sql1);
    $sql = "INSERT INTO contact(name,email,message,date,phone,subject) 
    VALUES('$name','$email','$message','$date','$Phone','$subject')";
    $result = mysqli_query($conn, $sql);
    header("Refresh:0; url=index.php");
    

    if($result){
        header("Refresh:0; url=index.php");
    header("Location:../../index.php");

    }
    
    

?>
