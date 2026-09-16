<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        /* background: black; */
        /* color: white; */
        /* font-weight: 700; */
    }
    .name {
        text-transform: capitalize;
    }
    .center_div {
        text-align: center;
    }
    ul {
        list-style-type: none;
    }
    .my_div {
        text-align: center;
    }
</style>

<body>


<h1 style="text-align: center;">This is my first day work in PHP</h1>


<div class="my_div">
    <h3>What is PHP</h3>
<ul>
    <li>PHP is a <b>Hypertext Preprocessor</b> language </li>
    <li>PHP is a <b>Server Side Scripting</b> language </li>
    <li>PHP is used for <b>Web Applications</b> & <b>Web Development</b> </li>
</ul>
</div>


<div class="center_div">

    
<?php 

// $my = "value for varible";

// define("hello", "This is Ayaz"); This is constant varaible
// echo hello;




// $value1 = 5;
// $value2 = 5;
// $new_value = $value1 % $value2;
// echo $new_value  . "<br>";


// echo "// this is php single-line-comment <br>";
// echo "/* this is php single-line-comment */  <br> ";
// echo var_dump($my) . "<br>";
// echo "  Hello", "Ayaz";


// (strlen) check string length
// (strtoupper) Uppercase
// (str_replace) Replace Text
// substr($text, 0, 5); Get part of a string


// $intro = "My name is Maryam!";

// echo str_replace("Maryam", "Ayaz", $intro);


// $x = 100;
// $y = "100";
// if ($x == 100 and $y == 50) {
//     echo "Hello world!";
// } else {
//     echo "Wrong answer";
// }

// $time = 8;

// if ($time > 6) {
//     echo "Have a good day";
// } else if ($time > 17) {
//     echo "Have a good night";
// }

// $x = 8;
// $x -= 10;
// switch (true) {
//     case 1 :
//         if ($x > 0) {
//             echo "The value is positive";
//         }
//     break;
//     case 2 : 
//         if ($x < 0) {
//             echo "The value is negative";
//         }
//     break;
//     default:
//     echo "Enter the valid value";
// }




// $x = -2;

// switch ($x) {
//     case 1:
//         if ($x >= 0) {
//             echo "The value is Positive";
//         }
//         break;

//     case 2:
//         if ($x >= 0) {
//             echo "The value is Positive";
//         }
//         break;
//     case 3: 
//         if ($x <= 0) {
//             echo "The value is Negative";
//         }
//         break;

//     default:
//         echo "Enter a valid value";
// }



// echo "<h1>Hi I am Ayaz!</h1>";
// echo "i am now adding two numbers <br>";
// $x = 3232;
// $y = 204827;

// echo "The Sum of " . $x . " & " . $y . " = " . $x+$y . "<br>";

// $age = 20;

// if ($age > 18) {
//     echo "You are adult -- " . $age;
// } else if ($age <= 18) {
//     echo "You are under 18 -- " . $age ;
// }


// $number = 8;

// echo "<br>";

// if ($number % 2 == 0 ) {
//     echo "The number is even -- " . $number;
// } else  {
//     echo "The number is odd -- " . $number;
// }


// echo "<br>";


// $name = "Ayaz";
// $age = 18;
// $city = "Lahore";


// echo "Hi, my name is " . $name . ". I am " . $age . " oears old and i live in " . $city . "."; 


echo "<span> I am learning Arrays in PHP  <br> </span>";

// $x = 0;

// for ($x; $x <= 100; $x++) {
//     if ($x % 2 != 0) {
//         echo "$x <br>";
//     }
// }


// $i = 1; // Initialize counter
// while ($i <= 6) { // Check condition
//   echo $i; // Execute code
//   $i++; // Increment counter
// }


// Simple Index Array

$array = ["blue", "red", "white"];
// echo $array[0];


// Associative Array


// $array = ["ayaz" => 19, "hamza" => 19, "hammad" => 17];


// $array["ayaz"] = "Saad";

// foreach ($array as $key => $value) {
//     echo "<div class='name'>Name: $key  Age: $value <br> </div>";
// }



// Multidimensional Array


// $array = array( array("BMW", 56, 12), array("Mercedes", 30 , 60) );


// foreach ($arrays as $array) {
//     foreach ($array as $car) {
//         echo $car . "<br>";
//     }
// }


// $brand = array_column($arrays, 0);
// echo var_dump($brand); 



// Array Functions

// array_column 
// array_change_key_case
// array_count_values
// array_combine
// array_push()
// array_pop()
// array_shift()
// array_unshift()
// count()
// sort()
// foreach
// array_filter()
// array_map()



// $cars = [
//     ["BMW", 250, "Black", 2022],
//     ["Mercedes", 300, "White", 2023],
//     ["Audi", 280, "Red", 2021],
//     ["Toyota", 180, "Blue", 2024],
//     ["Honda", 160, "Silver", 2022]
// ];

// $students = array(  "name" => "Ali", "age" => 19, "marks" => 85, "city" => "Lahore" );
// $numbers = array(0,1,2,3,4,0,1,2,3,4,0,1,2,3,4,0,1,2,3,4,0,1,2,3,4);
// $numbers2 = array(0,1,2,3,4,0,1,2,3,4,0,1,2,3,4,0,1,2,3,4,0,1,2,3,4);



// Array Column

// $c = array_column($cars, 0);
// print_r($c);



// Key Case
// print_r(array_change_key_case($students,CASE_UPPER));


// Count

// $count = array_count_values($numbers);
// foreach ($count as $c) {
//     echo $c;
// }

// Combine two arrays
// combine two arrays values and keys

// $name = ["Ayaz", "Subhan", "Ahmed", "Hammad"];
// $roll = [37, 20, 29, 26];
// $new_array = array_combine($name, $roll);
// print_r($new_array);


// Array Push Method

// $array = ['2'];
// array_push($array, 2,43,52,4234,24324);
// foreach ($array as $i) {
//     echo $i . "<br>";
// }


// Array Pop Method

// $array = ['2', 2];
// array_pop($array);
// foreach ($array as $i) {
//     echo $i . "<br>";
// }


// Count

// $array = [1,2,3,4];
// print_r (count($array));



// I try to push the code from laptop



?>

</div>

</body>
</html>