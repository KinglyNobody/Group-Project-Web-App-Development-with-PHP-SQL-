<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$result = 0;

//Answers from Roman Numbers
$question51 = clean($_POST["question51"]);
$question52 = clean($_POST["question52"]);
$question53 = clean($_POST["question53"]);
$question54 = clean($_POST["question54"]);
$question55 = clean($_POST["question55"]);
$question56 = clean($_POST["question56"]);
$question57 = clean($_POST["question57"]);
$question58 = clean($_POST["question58"]);
$question59 = clean($_POST["question59"]);
$question60 = clean($_POST["question60"]);

//Check Answers from Roman Numbers
if ($question51 == "9") {
	$result++;
}

if ($question52 == "39") {
	$result++;
}

if ($question53 == "22") {
	$result++;
}

if ($question54 == "16") {
	$result++;
}

if ($question55 == "44") {
	$result++;
}

if ($question56 == "XLVIII") {
	$result++;
}

if ($question57 == "XXXII") {
	$result++;
}

if ($question58 == "XX") {
	$result++;
}

if ($question59 == "XIV") {
	$result++;
}

if ($question60 == "XLVI") {
	$result++;
	
}

echo $result
?>


<h1> Test Results </h1>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>