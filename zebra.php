<html>
<head></head>
<body>
<?php
$r = rand(0,255);
$g = rand(0,255);
$b = rand(0,255);
$num=1;
$colorfila=0;
echo "<table>";
for($fila=1; $fila<11;$fila++){
	echo"<tr>";
	for($col=1; $col<11; $col++){
		if ($fila==1 || $fila==3 || $fila==5||$fila==7||$fila==9){
		echo "<td bgcolor=#EBEBEB >" .$num. "</td>";
		$num++;
		}
		else {
		echo "<td>" .$num. "</td>";
		$num++;
		}	
	}
	
	echo "</tr>";
	}

	echo "</table>";
?>
</body>
</html>