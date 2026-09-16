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
        width: 60%;
    margin: 0 auto;
    }
    ul {
        list-style-type: none;
    }
    .my_div {
        text-align: center;
    }
</style>

<body>


<h1 style="text-align: center;">Day 2 Learning PHP</h1>


<!-- <div class="my_div">
    <h3>What is PHP</h3>
<ul>
    <li>PHP is a <b>Hypertext Preprocessor</b> language </li>
    <li>PHP is a <b>Server Side Scripting</b> language </li>
    <li>PHP is used for <b>Web Applications</b> & <b>Web Development</b> </li>
</ul>
</div> -->

<div >

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

// $array = ["blue", "red", "white"];
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

// Shift Unshift

// $array = [1,2,3,4,5,1,1];
// echo var_dump(array_shift($array));
// array_shift($array);
// foreach($array as $e) {
//     echo $e;
// }

// echo "<br>";

// array_unshift($array, 2);

// foreach($array as $e) {
//     echo $e;
// }


// Sort


// $array = [1,2,3,4,5,1,1];


// rsort($array); Resort
// sort($array); Simple Sort
// ksort($array);   // Sort by KEY (A → Z)
// krsort($array);  // Sort by KEY (Z → A)

// asort($array);   // Sort by VALUE (keeps keys)
// arsort($array);  // Sort by VALUE descending (keeps keys)

// foreach ($array as $e) {
//     echo $e;
// }

// Things to learn after Function learning
// Array filter, Array Map

// echo "<span> I am learning Functions in PHP  <br> </span>";
// echo "<h3>What is PHP functions</h3>";
// echo "A function is a block of code which can be used whenever needed. <br>";
// echo "A function cannot automatically runs when page loads, it only runs when user need.";
// echo "<br>";
// echo "<br>";

// function first_function($name = "User") {
//     echo "Hi, $name";
// }

// first_function("Ayaz");



// echo "Learning day 2 things";
// echo "<h3 style='text-align: left !important';> For loop</h3>";
// for ($i = 0; $i <= 20; $i++) {
//     echo $i . "-";
// }
// echo "<h3 style='text-align: left !important';> While loop</h3>";
// $i = 0;
// while ($i <= 20) {
//     echo $i . "-";
//     if ($i == 10) {
//         break;
//     }
//     $i++;
// }
// echo "<h3 style='text-align: left !important';> For each</h3>";

// $array1 = ["red", "white", "blue", "black"];
// foreach ($array1 as $e) {
//     echo $e . " - ";
// }

// echo "<h3 style='text-align: left !important';> Index Arrays</h3>";
// print_r($array1);


// echo "<h3 style='text-align: left !important';> Associative Arrays</h3>";
// $array2 = ["Ayaz" => "Mercedes", "Hamza" => "BMW", "Hammad" => "Porchse"];
// print_r($array2);


// echo "<h3 style='text-align: left !important';> Multidimensonal Arrays</h3>";
// $array3 = array(
//     array(
//         "Ayaz" => "Mercedes", "Hamza" => "BMW", "Hammad" => "Porchse"
//     ),
//     array(
//         "Ayaz" => "Mercedes", "Hamza" => "BMW", "Hammad" => "Porchse"
//     )
// );
// print_r($array3);






 ?>

 </div>

 <!-- <div class="left_side" style="width: 50%;"> -->
<?php 


// echo "<h3 style='text-align: left !important';>Array Functions</h3>";


// $array4 = ["black", "red", "white", "blue", "pink", "skyblue", "golden"];

// foreach ($array4 as $i) {
//     echo $i . "  ";
// }


// echo "<br>Count Function <br>";
// print_r(count($array4));

// $array5 = ["black", "red", "white", "blue", "pink", "skyblue", "golden"];

// echo "<br>Sort Function <br>";
// sort($array5);
// print_r($array5);

// echo "<br>ReSort Function <br>";
// rsort($array5);
// print_r($array5);

// echo "<br>Push Function <br>";
// array_push($array5, "Gray");
// print_r($array5);

// echo "<br>Pop Function <br>";
// array_pop($array5);
// print_r($array5);

// echo "<br>Shift Function <br>";
// array_shift($array5);
// print_r($array5);


// echo "<br>Unshift Function <br>";
// array_unshift($array5, "Silver");
// print_r($array5);



// echo "<h3 style='text-align: left !important';>Functions</h3>";
// function first() {
//     echo "Message from function";
// }
// first();
// echo "<br>";

// function parameter_function($value = "User") {
//     echo "Default value:   Hi, " . $value . "<br>";
// }

// parameter_function();
// parameter_function("Ayaz");

// echo "<h3 style='text-align: left !important';>Varabile Scope</h3>";

// $x = 5;
// function test() {
//     global $x;
//     $y = 5;
//     $y = $x + $y;
//     echo "using global statement before varabile name" . $y;
// }

// test();


echo "<h4>For Loop 0-100</h4>";


for ($i = 0; $i <= 100; $i++) {
    echo $i;
}

echo "<br>";
echo "<h4>Even from 0-100</h4>";


for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
}

echo "<br>";
echo "<h4>Multiplication Table</h4>";


for ($i = 2; $i <= 10; $i++) {
    echo "2 * " . $i . " = " .  $i * 2 . "<br>";
}


echo "<br>";
echo "<h4>All Students</h4>";


$students = ["Ayaz", "Hammad", "Hamza", "Hassan"];
foreach ($students as $s ) {
    echo $s . "  ";
}






?>
<!-- </div> -->

</div>

</body>
</html>