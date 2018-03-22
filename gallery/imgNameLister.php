<?php
// read out filenames from folder style
 foreach(glob('pictures/*.jpg') as $filename)
 {
    echo "<img class='picInGallery' src='".$filename."'/>";
 }
?>