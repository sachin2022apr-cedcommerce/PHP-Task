<?php
    echo "Original Array:<br>";
    $array = array('1','2','3','4','5');
    foreach($array as $i)
    {
        echo $i."  ";
    }
    
    array_splice($array,3,0,"$");
    echo "<br>After inserting '$' the array is :<br>";
    foreach($array as $i)
    {
        echo $i."  ";
    }
?>
