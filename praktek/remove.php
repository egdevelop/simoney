<?php
// Initialize a file URL to the variable
$files = glob('hasil/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}