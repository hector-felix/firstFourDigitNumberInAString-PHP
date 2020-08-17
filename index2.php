<!DOCTYPE html>
<!--	Project2.php
        Use a function to find the first four-digit number
        in a given string.
-->
<html lang = "en">
    <head> 
        <title> Project2.php
        </title>
        <meta charset = "utf-8" />
    </head>
    <body>
<?php

// Function first_four
//  Parameter: a string containing numbers separated by spaces
//  Returns: the first four-digit number found in the string;
//           returns zero if the string has no four-digit 
//           number

function first_four($str) {

// Split the given string into its numbers

  $numbers = preg_split("/+/", $str);

  foreach ($numbers as $numb)
    if (strlen($numb)== 4)
      return $numb;

// If there was no four-digit number, return false

  return 0;

} #** End of first_four
?>
        
        <br>
        Enter Numbers: <br>
        <form method="POST" >
            <input type="text" name="numbers" />
            <input type="submit" name="Submit" />
            <br/>
            <form/>
            
            
<?php
// Main test driver, this is only for testing you must let the end user 
// input the numbers to be tested 
  
  
  if(isset($_POST['numbers'])) {
          $test_str = $_POST['numbers'];
          
          }

// Call the function

  $result = first_four($test_str);
  $displayString = preg_split("/[\s,]+/", $_POST['numbers']);

 
  
  
// If the returned value has four digits, display it

  if ($result != 0)  {
    print("The first four-digit number is: $result <br />");
  }
  else  {
    print("There was no four-digit number in the string <br />");
  }
  
   print ("<br/>Numbers Entered:<br/>");
foreach ($displayString as $value)
    {
   print ("$value <br />");
}
  
?>
    </body>
</html>
