<?php
// read out filenames from folder style
$integer = 0;
 foreach(glob('pictures/*.jpg') as $filename)
 {
    $integer++;
    echo "<img class='picInGallery' id='#".$integer."' src='".$filename."'/>";
 }
?>