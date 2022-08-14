<?php
$d = strtotime("Sunday");
$f = strtotime("+6 weeks", $d);

while ($d < $f) {
    echo date("M d", $d) . "<br>";
    $d = strtotime("+1 week", $d);
  }
 
?>