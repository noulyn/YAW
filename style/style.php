<?php
// read out filenames from folder style
 foreach(glob('style/*.css') as $filename)
 {
    echo "<link rel='stylesheet' href='".$filename."'/>";
 }
?>