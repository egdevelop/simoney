<?php
$compartment = "Jawa Barat";

$files = glob("hasil/*$compartment.*"); // Will find 2.txt, 2.php, 2.gif

// Process through each file in the list
// and output its extension
if (count($files) > 0){
foreach ($files as $file)
 {
    $info = pathinfo($file);
    echo "File found: ".$info["basename"]."<br>";
 }
}
 else{
  echo "No file name exists called $compartment. Regardless of extension.";
 }