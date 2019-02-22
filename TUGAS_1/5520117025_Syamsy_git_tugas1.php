<?php 
	function kanguru($x1, $v1, $x2, $v2) {
	@$kanguru1 .=$x1." ";
	@$kanguru2 .=$x2." ";
		echo "Kanguru (".$x1.",".$v1.",".$x2.",".$v2.")";
		echo "<br>";
		for ($i=0; $i < 4; $i++) { 
			$x1 += $v1; 
			$x2 += $v2;
			$kanguru1.= $x1." ";
			$kanguru2.=$x2." ";
		}
		echo "Kanguru1 = ".$kanguru1;
		echo "<br>";
		echo "Kanguru2 = ".$kanguru2;
		echo "<br>";

		if ($x1 == $x2) echo "<b>Yess</b><br><br>";
		else echo "<b>No</b><br><br>";
	}

	kanguru(0,3,4,2);
	kanguru(1,3,7,1);
	kanguru(1,2,5,1);
	kanguru(3,4,6,8);
 ?>
