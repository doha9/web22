<?php
// Two-dimensional Arrays
$cars=array(
array("VOLVO",22,44),
array("BMW",27,04),
array("LAND",52,34),
);


echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// Indexed Arrays
$car= array("Volvo", "BMW", "Toyota");
print "I like " . $car[0] . ", " . $car[1] . " and " . $car[2] . ".";

$ca= array("Volvo", "BMW", "Toyota");
print rsort($ca);
print sort($ca);
$numbers = array(4, 6, 2, 22, 11);
print  sort($numbers);

// Associative Arrays

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print "Peter is " . $age['Peter'] . " years old."."<br>";
print arsort($age)."<br>";
print asort($age)."<br>";
print krsort($age)."<br>";


$t = 20;
if ($t < 10) {
  echo "10";
} elseif ($t < 20) {
  echo "20";
}elseif ($t < 30) {
  echo "30";
} else {
  echo "NoOne";
}

echo"<br>";

$t = 20;
switch ($t) {
  case 10:
    echo " 10!";
    break;
  case 20:
    echo "20!";
    break;
  case 30:
    echo " 30!";
    break;
  default:
    echo "NoOne!";
}

?>