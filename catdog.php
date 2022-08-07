<?php
$dog = "Шарик"; 
$cat = "Барсик";
$fish = "Немо";
$type_animals = ['dog','cat', 'fish', 'buldog'];
$i = 0;
while ($i < 10) {
    $type_animal = $type_animals [rand (0, count($type_animals) - 1)];  
    if ($type_animal == 'dog') {echo $type_animal . " -- " .$dog;}
    else if ($type_animal == 'cat') {echo $type_animal . " -- " . $cat;}
    else if ($type_animal == 'fish') {echo $type_animal . " -- " . $fish;}
    else  echo "Error!";
    $i++;
}
