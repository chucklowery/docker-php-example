<?php
$value = "";
for ($x = 0; $x <= 1000; $x++) {
   $value = md5( "The number is: $x <br>");
}
echo $value;
?>
