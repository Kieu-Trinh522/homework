<?php
function sumMax($array){
    $sum=0;
    rsort($array);
    $sum=$array[0]+$array[1];
        return $sum;
}
$arr=[3,7,19,99,87,56,73,98,13];

echo sumMax($arr);