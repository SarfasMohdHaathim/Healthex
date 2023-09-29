<?php
function compress_image_data($image_data, $destination_url, $quality) {
    $image = imagecreatefromstring($image_data);

    // Save the compressed image to the destination URL
    imagejpeg($image, $destination_url, $quality);
         
    return $destination_url;    
}

session_start();
$folderPath = 'uploads/';

$image_parts = explode(";base64,", $_POST['image']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);

$file = $folderPath . uniqid() . '.jpg'; // Change the file extension to jpg

$compressimage = compress_image_data($image_base64, $file, 100);

$_SESSION['image'] = $file;
echo json_encode([""]);
?>
