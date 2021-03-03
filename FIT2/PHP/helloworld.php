<?php

function printValues(...$values)
{
  foreach($values as $value)
    echo "$value\n";
}

printValues(1, 2, 3);
?>

