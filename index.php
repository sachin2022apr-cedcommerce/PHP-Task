<?php
$num=6;
$copy=$num;
$factorial=1;
    while($copy!=1){
        $factorial *= $copy;
        $copy--;
    }
echo "factorial of ".$num." = ".$factorial;

?> 
