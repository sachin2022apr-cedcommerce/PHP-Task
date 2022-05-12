<?php
    echo "Recorded Temperatures:<br>";
    $temprature_array = array( 78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
    
    foreach($temprature_array as $x)
    {
        echo $x."  ";
    }
   
    $array_length=count($temprature_array);
    
    $avg = 0;
    foreach($temprature_array as $x)
    {
        $avg=$avg+$x;
    }

    $avg=$avg/$array_length;

    echo "<br><br>Average Temperature: ";
    echo $avg."<br>";

    sort($temprature_array);
    echo "<br> Sorted array : <br>";
    foreach($temprature_array as $x)
    {
        echo $x."  ";
    }
    
    echo "<br><br>List of five lowest temperatures : <br>";
    for($i=0;$i<5;$i++){
        echo $temprature_array[$i]."  ";
    }

    echo "<br><br>List of five highest temperatures :  <br>";
    for($i=count($temprature_array)-5;$i<=count($temprature_array);$i++){
        echo $temprature_array[$i]."  ";
    }
?>
