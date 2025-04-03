<?php 
$names = array("John", "Jane", "Doe");

$index = 0;

while($index < count($names)) {
  echo "<li>Hi, my name is $names[$index]</li>";
  $index++;
}

?>