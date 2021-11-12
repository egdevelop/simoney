<!DOCTYPE html>
<html>
<head>
  <title>Belajar Array 2 Dimensi PHP</title>
</head>
<body>
    <h1>Mat A</h1>
<table border="1">
<tr><td>Kolom 1</td><td> Kolom 2</td><td> Kolom 3</td></tr>
<?php
$a = array(
		array(1,2,3),
		array(2,2,4),
		array(2,3,1),
		);
$b = array(
		array(2,2,3),
		array(2,2,1),
		array(2,3,1),
		);
$c = array(
		array(),
		array(),
		array(),
		);

        	for ($row = 0; $row < 3; $row++) {
		for ($col = 0; $col < 3; $col++) {
			$c[$row][$col] = $a[$row][$col] + $b[$row][$col];
		}
}
			
	for ($row = 0; $row < 3; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 3; $col++) {
			echo "<td>".$a[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>
<h1>MAT B</h1>
<table border="1">
<tr><td>Kolom 1</td><td> Kolom 2</td><td> Kolom 3</td></tr>
<?php
$a = array(
		array(1,2,3),
		array(2,2,4),
		array(2,3,1),
		);
$b = array(
		array(2,2,3),
		array(2,2,1),
		array(2,3,1),
		);
$c = array(
		array(),
		array(),
		array(),
		);

        	for ($row = 0; $row < 3; $row++) {
		for ($col = 0; $col < 3; $col++) {
			$c[$row][$col] = $a[$row][$col] + $b[$row][$col];
		}
}
			
	for ($row = 0; $row < 3; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 3; $col++) {
			echo "<td>".$b[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>
<h1>MAT C</h1>
<table border="1">
<tr><td>Kolom 1</td><td> Kolom 2</td><td> Kolom 3</td></tr>
<?php
$a = array(
		array(1,2,3),
		array(2,2,4),
		array(2,3,1),
		);
$b = array(
		array(2,2,3),
		array(2,2,1),
		array(2,3,1),
		);
$c = array(
		array(),
		array(),
		array(),
		);

        	for ($row = 0; $row < 3; $row++) {
		for ($col = 0; $col < 3; $col++) {
			$c[$row][$col] = $a[$row][$col] + $b[$row][$col];
		}
}
			
	for ($row = 0; $row < 3; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 3; $col++) {
			echo "<td>".$c[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>



</body>
</html>