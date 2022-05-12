<?php

$array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 

$filter_array = array('c2', 'c4');


print_r(array_diff_key( $array, array_flip($filter_array)));

?>