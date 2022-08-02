<?php
//loops******for******

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }


  echo"<br>";echo"<br>";echo"<br>";
 $colors = array("red", "green", "blue");

for($x = 0; $x <= count($colors); $x++) {
  echo  "$colors[$x]<br>";
}
//loops******foreach******

$colors = array("red", "green", "blue");

foreach ($colors as $value) {
  echo "$value <br>";
}

echo"<br>";echo"<br>";echo"<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "The number is:  $x = $val<br>";
}


?>