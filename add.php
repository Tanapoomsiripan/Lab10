<?php
	$a = $_GET["mango"];
	$b = $_GET["orange"];
	$c = $_GET["banana"];
	echo "<b>ยอดขาย </b>";
	$Aresult = $a*30;
	$Bresult = $b*70;
	$Cresult = $c*30;
	echo $Aresult+$Bresult+$Cresult;
	echo "<b> บาท</b>"
?>