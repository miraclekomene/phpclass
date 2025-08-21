<?= "testing the php code"?>
<!-- or -->
<?php echo "<br />hello how are you" ?>


<br>
<?php
// PHP HOME
echo "Welcome to PHP!<br><br>";

// PHP INTRO
echo "PHP is a server-side scripting language designed for web development.<br>";

// PHP INSTALL
echo "To install PHP, download it from php.net and configure it with a web server like Apache.<br>";

// PHP SYNTAX
echo "PHP code is written within <?php ?> tags using echo.<br>";
print "Hello, World! using print<br>";
print("Hello, PHP!<br>");
echo("I am in PHP class<br><br>");


// PHP COMMENTS
// This is a single-line comment
# This is another single-line comment
/*
This is a multi-line comment
*/

// PHP VARIABLES
$name = "John";
$age = 25;

// PHP ECHO / PRINT
echo "Hello, I am $name! and I am $age years old.<br><br>";

// PHP DATA TYPES
$integer = 10;
$float = 20.5;
$string = "PHP";
$boolean = true;
$array = array('benz', 'volvo', 'toyota');

echo "<br>";
var_dump($boolean);
echo "<br>";
var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";
echo $array[1];
echo "<br>";


// PHP STRINGS
echo "String length: " . strlen("Hello World") . "<br>";
echo ucwords("am in coding class") . "<br>";
echo strtolower("LOWERCASE") . "<br>";
echo md5("hello");

echo "<br>";

// PHP NUMBERS
echo "Random number: " . rand(1, 100) . "<br>";

echo "<br>";

// PHP MATH
echo "Square root of 16: " . sqrt(16) . "<br>";

// PHP CONSTANTS
define("SITE_NAME", "MyWebsite");
echo "Welcome to " . SITE_NAME . "!<br>";
define("Emma","i am a boy<br/>");
print Emma;

define("Person","A person coding");
echo Person;

// PHP OPERATORS
$x = 10;
$y = 5;
echo "Sum: " . ($x + $y) . "<br>";
echo  ($x + $y) . "<br>";
echo ($x * $y) . "<br>";
echo ($x - $y) . "<br>";
echo ($x ** $y) . "<br>";
echo ($x / $y) . "<br>";

// PHP IF…ELSE…ELSEIF
if ($x > $y) {
    echo "$x is greater than $y.<br>";
} elseif ($x == $y) {
    echo "$x is equal to $y.<br>";
} else {
    echo "$x is less than $y.<br>";
}

if($x === 10){
    echo "correct <br/>";
}else{
    echo "wrong <br />";
}

// PHP SWITCH
// $day = "Mon";
$day = date('D');
echo date("H i m") . "<br />";
// echo $day;
switch ($day) {
    case "Mon":
        echo "Today is Monday.<br>";
        break;
    case "Tue":
        echo "Today is Tuesday.<br>";
        break;
    case "Wed":
        echo "Today is Wednesday.<br>";
        break;
    case "Thu":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    default:
        echo "Not a working day.<br>";
}

// PHP LOOPS
// while loop
$i= 1;
while($i<=10){
    print $i . " ,";
    $i++;
}
echo "<br />";


$m=1;
while($m<=10){
    print "2 X " . $m . "=". 2*$m . "<br />";
    $m++;
}

print("<br>");

// do while loop
$j = 1;
do{
    echo $j . "=>";
    
    $j++;
}while($j <6);
print("<br>");

// for loop

for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i<br>";
}

for($m= 1; $m <= 100; $m++){
    print "[".$m."]";
}
print "<br>";

$array = array('Hp','Dell','Asus');
echo "<br>";

foreach($array as $computers){
    echo $computers . ", <br> ";
}

// PHP FUNCTIONS
function greet($name) {
    return "Hello, $name!<br>";
}
echo greet("Alice");
echo('<br>');

function sumNumbers($num, $num2){
    return $num + $num2;
}

echo sumNumbers(3,9);

echo "<br />";

function multiplyNumbers($number, $power){
    return $number**$power;
}
echo multiplyNumbers(10,2);


// PHP ARRAYS
// a. Indexed array: array with numeric index
$cararray = array("toyota", "camry", "corolla", "royce");
echo "<br>" . $cararray[2] . "<br>";

$cities = ["New York", "London", "Paris"];
echo "City: " . $cities[1] . "<br>";
foreach ($cities as $city) {
    echo $city ." using foreach loop <br />";
}

// b. Associative Array: array with named keys
$userdetails = array("firstname"=>"Jude", "lastname"=>"Peter", "age"=>30);

echo "<br><br>";
echo $userdetails['firstname'];

echo "<br><br>";

foreach($userdetails as $key => $value){
    echo $key ." is " . $value . "<br>";
}
echo"<br>";

//c. multidimensional array: arrays containing one or more arrays
$class = array("Peter John"=>array("maths"=>10,"english"=>5,"physics"=>70 ),
"James Smith"=>array("maths"=>20, "english"=>2, "physics"=>80)
);

echo "James Smith English score is " . $class['James Smith']['english'];
echo "<br>";
echo "Peter john physics score is " . $class["Peter John"]["physics"];
echo "<br>";

$cart=array("marker"=>array("quantity"=>2,"price for each"=>100), 
            "pen"=>array("quantity"=>5, "price for each"=>50), 
            "bag"=>array("quantity"=>2, "price for each"=>2500), 
            "ruler"=>array("quantity"=>4, "price for each"=>200),
        );

echo "Marker: &#8358;" . $cart['marker']['price for each'] . " each, quantity " . $cart['marker']['quantity'] . " and total: &#8358;" . $cart['marker']['quantity'] * $cart['marker']['price for each'];
echo "<br>";
echo "Pen: &#8358;" . $cart['pen']['price for each'] . " each, quantity " . $cart['pen']['quantity'] . " and total: &#8358;" . $cart['pen']['quantity'] * $cart['pen']['price for each'];
echo "<br>";
echo "Bag: &#8358;" . $cart['bag']['price for each'] . " each, quantity " . $cart['bag']['quantity'] . " and total: &#8358;" . $cart['bag']['price for each']* $cart['bag']['quantity'];
echo "<br>";
echo "Ruler: &#8358;" . $cart['ruler']['price for each'] . " each, quantity " . $cart['ruler']['quantity'] . " and total: &#8358;" . $cart['ruler']['price for each'] * $cart['ruler']['quantity'];
echo "<br>";
echo "Total: &#8358;" . $cart['marker']['quantity'] * $cart['marker']['price for each'] + $cart['pen']['quantity'] * $cart['pen']['price for each'] + $cart['bag']['price for each']* $cart['bag']['quantity'] + $cart['ruler']['price for each'] * $cart['ruler']['quantity'];

echo "<br>";
echo "<br>";

// classwork 
$marketItems = array("rice"=>array("quantity"=>4, "price per unit"=>500), 
                    "carrot"=>array("quantity"=>2, "price per unit"=>100),
                    "cabbage"=>array("quantity"=>3, "price per unit"=>2000),
                    "cucumber"=>array("quantity"=>6, "price per unit"=>200),
                    "beans"=>array("quantity"=>5, "price per unit"=>500),
                );

                echo "price for rice ".$marketItems['rice']['quantity'] * $marketItems['rice']['price per unit'];
                echo "<br />";

// PHP SUPERGLOBALS
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
//include("index.php");
//require_once(index.php);
$_GLOBALS['username'] = "a user";
echo $_GLOBALS['username'];
echo "<br>";

echo("server section");
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];//ip of server
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];//ip address of user
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

// PHP DATE AND TIME
echo "<br />";
echo date("D");
echo "<br />";
echo "Current date: " . date("Y-m-d") . "<br>";
echo date('D dS Y, F M h : i s a ');
echo '<br>';
echo date('H : i S');
echo '<br>';
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");

// PHP REGEX 
// A sequence of charactes that forms a search pattern. 
// when you search for data in a text, you can use this search pattern to describe what you are searching for.
if (preg_match("/PHP/", "I love PHP")) {
    echo "<br> Match found!<br>";
}else{
    echo "<br> No match found!<br>";
}

// PHP FORMS
// Skipped: Forms require HTML structure


// PHP INCLUDE
// Include another PHP file using include 'file.php';
// include 'register.php';

// PHP FILE HANDLING
// Skipped: Involves creating, reading, or writing to files

// PHP COOKIES
setcookie("user", "John", time() + (86400 * 30), "/");//name, value, expiry(1 month), path
if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'] . "<br>";
}

// PHP SESSIONS
session_start();
$_SESSION['user'] = "Peter";
echo "Session Value: " . $_SESSION['user'] . "<br>";

// PHP JSON
$data = ['name' => 'John', 'age' => 25];
echo "JSON: " . json_encode($data) . "<br>";

// PHP EXCEPTIONS
try {
    throw new Exception("An error occurred.");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

?>
