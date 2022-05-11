<?php
$marks=58;
if($marks>=60)
{
    $result='First Division';
}
else if($marks >=45 && $marks<=59)
{
    $result='Second Division';
}
else if($marks >=33 && $marks <=44)
{
    $result='Third Division';
}
else if($marks <33)
{
    $result='Fail';
}
echo "Student Result is "."$result";
?>
