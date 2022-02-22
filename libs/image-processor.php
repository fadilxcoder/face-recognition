<?php

if (isset($_POST['save_image'])):

    $extension = '.jpg';
    $img = $_POST['image'];
    $folderPath = "./images/";

    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);
    $fileName = 'web-cam-' . uniqid() . $extension;

    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);

endif;
?>
