<?php
    $img = glob('hasil/*.jpg'); // get all file names
    $pdf = glob('hasil/*.pdf'); // get all file names
    echo"<embed type='application/pdf' src='$pdf[0]' width='1900px' height='3600px'></embed>";
    echo"<img src='$img[0]' width='1800px' />";
    
?>
<br>
<a href="percobaan1.php">Perbarui</a>