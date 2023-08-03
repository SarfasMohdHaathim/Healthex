<?php
session_start();
$folderPath = 'uploads/clients/';
$image_parts = explode(";base64,", $_POST['image']);
$image_type_aux = explode("image1/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$file = $folderPath . uniqid() . '.png';
file_put_contents($file, $image_base64);
$_SESSION['image1']=$file;
echo json_encode([""]);
?>