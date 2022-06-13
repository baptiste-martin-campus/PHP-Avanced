<?php
$tableau = [1,2,3];
foreach($tableau as &$element){
    $element=$element+1;
}
var_dump($tableau);

$tableau = [1,2,3];
for($i=0;$i<count($tableau);$i++){
    $element = &$tableau[$i];
    $element = $element+1;
}
var_dump($tableau);

$i=0;
while($i<count($tableau)){
    $element = &$tableau[$i];
    $element = $element+1;
    $i++;
}





