<?php
$array = array(1, 5, 32, 34, 78, 65, 12, 4, 7);
$ar = [];

for ($i = 0; $i < count($array)/3; $i++) {
        array_push($ar, $array[$i]);
        array_push($ar, $array[$i + 3]);
        array_push($ar, $array[$i + 6]);
}
print_r($ar);


