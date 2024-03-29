<?php
//version simplifié
function fiboSimple($n)
{
    // pour chaque appel on garde les valeurs des appels précédents dans une mémoire commune à la fonction
    static $a = 1, $b = 1;
    if ($n === 0) return 0;
    if ($n <= 2) return 1;
    list($a,$b)=[$b,$a];
    $b = $a + $b;
    return $b;
}

$rang = 0;
while ($rang < 16) {
    echo "rang: $rang", " ", fibosimple($rang);
    $rang++;
    echo "<br>";
}



//fibo v2
function fibo($max){
    // pour chaque appel on garde les valeurs des appels précédents dans une mémoire commune à la fonction
    static $a = 1, $b = 1, $count = 2; 
    
    if($max === 0) return 0;
    if($max <= 2) return 1;
    
    while($count < $max){
        $count++;
        list($a, $b) = [$b, $a];
        $b = $a + $b;
        fibo($max);
    }

    return $b;
}

$rang = 0;
while($rang < 16){
    echo "rang: $rang", " " , fibo($rang);
    $rang++;
    echo "\n";
}