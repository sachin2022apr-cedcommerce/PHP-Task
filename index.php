<?php
    echo "<table width=400px height=400px border=2px>";
        for($i=0; $i<8; $i++){
            echo "<tr>";
            for($j=0;$j<8;$j++){
                $total=$i+$j;
                if($total%2 == 0)
                    echo "<td height=30px width=30px bgcolor=black></td>";
                else if($total%2 != 0)
                    echo "<td height=30px width=30px bgcolor=white></td>";
             }
             echo "</tr>";
         }
    echo "</table>";
?>
