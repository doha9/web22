<?php
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(4)."\n");






echo"<br>";echo"<br>";echo"<br>";




function check_palindrome($string) 
{
  if ($string == strrev($string))
      return  "palindrome";
  else
  echo "notpalindrome";
}
echo check_palindrome('pop')."<br>";
echo check_palindrome('madam')."<br>";
echo check_palindrome('meme')."<br>";

echo"<br>";echo"<br>";echo"<br>";




?>