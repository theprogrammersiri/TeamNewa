<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>My first PHP page</h1>

<?php

  $x = 5;
  $y = "Sujan";
  $z = 5;
  
  // prints the variable type
  var_dump($x); 
  

  echo $x;
  echo "<br>";
  echo $y, "Sucess";
  echo "<br>";

  $txt = "Test";
  echo "I said $txt!";
  echo "<br>";
  echo "The sum of two numbers are ", $x + $z;

?>



    
</body>
</html>