<?php
    echo "<table border='1' style='border-collapse:collapse; text-align: center; background-color: yellow;'>";
    for ( $i=1 ; $i<=7 ; $i++ ){
        echo "<tr>";
        for( $j=1 ; $j <= 7 ; $j++ )
        {
            echo "<td style='width:25px;'>";
            echo ($i*$j);
            echo "</td>";
        }
       echo "</tr>";
    }
    echo "</table>";
    $i = 0;
for (++$i; ++$i; ++$i) {
echo $i;
if ($i >= 4) {
break;
}
}
?>