<?php 
  
function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}

$source_img = 'image.jpg';
$destination_img = 'image_2.jpg';

$d = compress($source_img, $destination_img, 70);


$new_width  = 250;
$new_height = 250;
$this_image = "image_2.jpg";

list($width, $height, $type, $attr) = getimagesize("$this_image");

if ($width > $height) {
  $image_height = floor(($height/$width)*$new_width);
  $image_width  = $new_width;
} else {
  $image_width  = floor(($width/$height)*$new_height);
  $image_height = $new_height;
}
echo "<div style='margin-left: 351px;margin-top:100px;'><img src='$this_image' height='$image_height' width='$image_width'>";
echo "<img style='margin-left:25px;' src='$source_img' height='$image_height' width='$image_width'></div>";
?>
<div style="margin-left:438px;color:red;">Original Image<span style="margin-left:160px;">Converted Image</span></div>


