<?php
	function kangguru($a1, $b1, $a2, $b2){
	@kangguru1 .=$a1." ";
	@kangguru2 .=$a2." ";
		echo "kangguru (".$a1.",".$b1.",".$a2.",".$b2.")";
		echo "<br>";
		for ($i=0; $1 < 4; $1++){
			$a1 += $b1;
			$a2 += $b2;
			$kangguru1.= $a1." ";
			$kangguru2.= $a2." ";
		}
		echo "kangguru1 = ".$kangguru1;
		echo "<br>";
		echo "kangguru2 = ".$kangguru2;
		echo "<br>";

		if ($a1 == $a2) echo "<b>yess</b><br><br>";
		else echo "<br>No</b><br><br>";
		}

		kangguru(0,3,4,2);
		kangguru(1,3,7,1);
		kangguru(1,2,5,1);
		kangguru(3,4,6,8);
	?>