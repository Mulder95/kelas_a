<?php
    function kangguru($x1, $v1, $x2, $v2){
        @$kangguru1 .=$x1." ";
        @$kangguru2 .=$x2." ";
        for ($i=0; $i < 4; $i++) {
            $x1 += $v1;
            $x2 += $v2;
            @$kangguru1.= $x1." ";
            @$kangguru2.= $x2." ";
    }
        echo "Kangguru1 = ".$kangguru1;
        echo "<br>";
        echo "Kangguru2 = ".$kangguru2;
        echo "<br>";

        if ($x1 == $x2) echo "<b>YES</b><br><br>";
        else echo "<b>NO</b><br><br>";
}
   kangguru(0,3,4,2);
        echo "<br>";
    kangguru(1,2,5,1);
        echo "<br>";
    kangguru(1,3,7,1);
        echo "<br>";
?>