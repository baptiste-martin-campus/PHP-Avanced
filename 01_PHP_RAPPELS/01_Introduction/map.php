
<?php
function cube($n)
{
    return ($n * $n * $n);
}

$cube = function($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];

$b = array_map($cube, $a);


foreach($a as &$n){
    $n = cube($n);
}

print_r($b);


