<?php

    $colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');

    $remove = 'Black';

    print_r($colors);

    echo "<br><br>";

    $filtered_array = array_filter($colors, function ($element) use ($remove) { return ($element != $remove);}); 

    print_r($filtered_array);

?>