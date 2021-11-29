<?php
include_once 'header.php';
require 'dbconnect.php';
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

$sqlupdate = "UPDATE `ptest` SET block_5='".$result."' WHERE studentid='".$studentid."'";

if ($conn->query($sqlupdate) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sqlupdate . "<br>" . $conn->error;
	};
?>


<h1> Test Results </h1>

<?php

$sqlselect = "SELECT * FROM ptest WHERE studentid='".$studentid."' ";

if ($conn->query($sqlselect)) {
		$table = $conn -> query($sqlselect);
		$row = $table -> fetch_array(MYSQLI_ASSOC);
		$total = $row["block_1"] + $row["block_2"] + $row["block_3"] + $row["block_4"] + $row["block_5"];
		echo "<p id='TotalPoints'>Total points: ".$total."/60</p>";
	} else {
		echo "Error: " . $sqlselect . "<br>" . $conn->error;
	
	};

?>

<?php
}
else if ($_SERVER['REQUEST_METHOD'] == "GET") {
	
	$studentid = clean($_GET['studentid']);

?>


<h1> Test Results </h1>

<?php

$sqlselect = "SELECT * FROM ptest WHERE studentid='".$studentid."' ";

if ($conn->query($sqlselect)) {
		$table = $conn -> query($sqlselect);
		$row = $table -> fetch_array(MYSQLI_ASSOC);
		$total = $row["block_1"] + $row["block_2"] + $row["block_3"] + $row["block_4"] + $row["block_5"];
		echo "<p id='TotalPoints'>Total points: ".$total."/60</p>";
	} else {
		echo "Error: " . $sqlselect . "<br>" . $conn->error;
	
	};	
	
}

else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>
