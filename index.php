<?php
//include "form.html";
//require "form.html";
require_once "form.html";

exit;
echo "<br> <br><br><br><br><br>";

$a = rand(0, 100);
$b = rand(0, 100);
echo "$a + $b = " . $a + $b;

$str_one = ["first","second", "third" ];
$str_two = [ "first1","second2", "third3" ];

echo "<br>";
echo $str_one[1] . " " .  $str_two[2];

echo "<br>";

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
echo substr(str_shuffle($permitted_chars), 0, 20);
echo "<br>";

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
echo substr(str_shuffle($permitted_chars), 0, 10);
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
echo 'video-'.substr(str_shuffle($permitted_chars), 0, 16).'.mp4';

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

echo "<br>";
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

echo "<br>";

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
    echo "<br>";
}

//https://code.tutsplus.com/ru/tutorials/generate-random-alphanumeric-strings-in-php--cms-32132
//Создание случайных шестнадцатеричных строк
//Если вы хотите генерировать случайные шестнадцатеричные строки в PHP, 
//вы также можете использовать либо md5($string, $raw_output), либо функцию sha1($string, $raw_output). Обе они будут генерировать хэши входной строки.
//https://www.php.net/manual/ru/language.variables.basics.php