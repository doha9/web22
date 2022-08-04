<?php
//(1)display 1-2-3-4-5-6-7-8-9-10 

if($x=10){
    for ($x = 1; $x <= 10; $x++) {
        if( $x <= 9){ echo  "$x -";}
           else echo  $x;
    }
}else     echo "\n";



//(2)*****

echo "<br>";echo "<br>";echo "<br>";

for($x = 1; $x <= 5 ;$x++) {
    for($i = 1; $i <= $x; $i++) {
        echo "* ";
    }echo "<br>";
}
    

for($x = 1; $x <= 5 ;$x++) {
    for($i = 5; $i >= $x; $i--) {
        echo "* ";
    }echo "<br>";
}
echo "<br>";

//(3)D
for ($x = 0; $x <= 3; $x++) {
    echo " * ";
  }  echo"<br>";
  for ($x = 0; $x <= 5; $x++) {
    echo " *  &nbsp &nbsp &nbsp &nbsp   *<br>";
  }
  for ($x = 0; $x <= 3; $x++) {
    echo " * ";
  }
 
 
  echo "<br>";echo "<br>";echo "<br>";
 //(3)T
for ($x = 1; $x <= 5; $x++) {
    echo " * ";
  }  echo"<br>";
  for ($x = 0; $x <= 3; $x++) {
    echo "  &nbsp &nbsp  &nbsp*<br>";
  } 
  echo "<br>";echo "<br>";echo "<br>";


  //factorial num 
  $n = 3;
  $x = 1;
  for($i=1;$i<=$n-1;$i++)
  {
   $x*=($i+1); 
  }
  echo "The factorial of  $n = $x"."\n";
 

 echo "<br>";echo "<br>";echo "<br>";
 //باستخدام while عد من 5ل15 
 $x = 5;

while($x <= 15) {
  echo "The number is:  $x <br>";
  $x++;
} 

?>
