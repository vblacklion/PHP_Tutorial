<?php
  # defining a constant: constants can not be changed afterwards
  define('NAME', 'Yoshi');
 
  // printing :
  echo "hello, all. <br>";
 
  // assigning variables:
  $name = 'Yoshi';
  $age = 30;

  // String concatenation:
  $stringOne = 'My email is ';
  $stringTwo = 'Yoshi123@gmail.com';
  
  echo $stringOne . $stringTwo;
  echo '<br>';
  echo 'Hey, my name is ' . $name;
  
  // using double quotes. no need to concatenate!!
  echo "Hey, now I am using double quotes to show this $name";
  
  // escaping the double quotes:
  echo "<br>Yoshi screamed \"whaaaa\"";
  
  // using double and single quotes together:
  echo '<br>Yoshi screamed "whaaaa".';
  echo "<br>Yoshi screamed 'whaaaa'.";
  
  // slicing variables
  echo $name[0];
  
  // string functions
  echo strlen($name);
  echo strtoupper($name);
  echo strtolower($name);
  echo str_replace('o', 'u', $name);
  
  // interger and floats
  $radius = 25;
  $pi = 3.14;
  
  // basic math operations *, /, +, -, **
  
  // order of operations ( B I D M A S ) Brackets,  Indice=Power, Division, Multiplication, Addition, Subtraction
  
  echo $pi* $radius**2;
  echo '<br>';
  echo 4-4+5;
  // increment and decrement operators:
  echo '<br> increment and decrement <br>';
  echo $radius;
  echo $radius++; //adds one to the radius
  echo $radius--;
  echo $radius;
  echo '<br> increment and decrement <br>';
  $age = 20;
  
  $age += 10;
  echo $age;
  
  // number functions:
  echo '<br> number functions: <br>';
  $num1 = 2.49;
  $num2 = 2.5;
  $num3 = -2.51;
  echo "Numbers are <br>num1=$num1 <br><br>num2=$num2 <br><br>num3=$num3 <br>";
  
  echo floor($num1);
  echo floor($num2);
  echo floor($num3);
  echo '<br> number functions: <br>';
  echo ceil($num1);
  echo ceil($num2);
  echo ceil($num3);
  echo '<br> number functions: <br>';
  echo round($num1);
  echo round($num2);
  echo round($num3);
  
  
  
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<h1><?php echo 'hello, all. Hello..'; ?></h1>
	
</body>
</html>