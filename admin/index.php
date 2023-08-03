<?php

@include 'php/db_conn.php';

session_start();

if(!isset($_SESSION['admin'])){
   header('location:login.php');
}else{
   header('location:contact.php');
}

?>