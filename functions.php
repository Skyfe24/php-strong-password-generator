<?php

$pass_length = $_GET['pass_length'];

$randomizer = array();
$range = array_merge(range('A', 'Z'),range('a', 'z'),range('0', '9'),range('!', '/'));

for ($i=0; $i < $pass_length; $i++){
  $index = array_rand($range, 1);
  array_push($randomizer, $range[$index]);
};

$passwordResult = implode($randomizer);
echo $passwordResult;










?>