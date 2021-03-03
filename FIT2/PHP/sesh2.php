<?php

$number = 32;

function foo(&$lol){
  return ++$lol;
}

echo foo($number);
echo ' ' . $number;
?>
