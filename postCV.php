<?php

$fname = $_POST["fname"];
$lang = $_POST["pl"];

echo "Full Name:  $fname" . $_POST["lname"] . "<br>";
echo "Username:  ". $_POST["uname"] . "<br>";
echo "Password " . $_POST["pw"] . "<br>";
echo "Course: " . $_POST["course"] . "<br>";
echo "Gender" . $_POST["gender"] . "<br>";
echo "Programming Language: ";

foreach($lang as $pl){
    echo "$pl" ;
}


?>