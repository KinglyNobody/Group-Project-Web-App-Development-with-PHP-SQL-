<?php
include_once 'header.php';
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$result = 0;

//Answers from Units
$question11 = clean($_POST["question11"]);
$question12 = clean($_POST["question12"]);
$question13 = clean($_POST["question13"]);
$question14 = clean($_POST["question14"]);
$question15 = clean($_POST["question15"]);
$question16 = clean($_POST["question16"]);
$question17 = clean($_POST["question17"]);
$question18 = clean($_POST["question18"]);
$question19 = clean($_POST["question19"]);
$question20 = clean($_POST["question20"]);
$question21 = clean($_POST["question21"]);
$question22 = clean($_POST["question22"]);
$question23 = clean($_POST["question23"]);
$question24 = clean($_POST["question24"]);
$question25 = clean($_POST["question25"]);
$question26 = clean($_POST["question26"]);
$question27 = clean($_POST["question27"]);
$question28 = clean($_POST["question28"]);
$question29 = clean($_POST["question29"]);
$question30 = clean($_POST["question30"]);

//Check Answers from Units
if ($question11 == "0.925" or $question11 == "0,925") {
	$result++;
}

if ($question12 == "0.2" or $question12 == "0,2") {
	$result++;
}

if ($question13 == "1.386" or $question13 == "1,386") {
	$result++;
}

if ($question14 == "0.5" or $question14 == "0,5") {
	$result++;
}

if ($question15 == "7.26" or $question15 == "7,26") {
	$result++;
}

if ($question16 == "0.08" or $question16 == "0,08") {
	$result++;
}

if ($question17 == "0.135" or $question17 == "0,135") {
	$result++;
}

if ($question18 == "1.25" or $question18 == "1,25") {
	$result++;
}

if ($question19 == "4500") {
	$result++;
}

if ($question20 == "900") {
	$result++;
}

if ($question21 == "8500") {
	$result++;
}

if ($question22 == "2200") {
	$result++;
}

if ($question23 == "0.07" or $question23 == "0,07") {
	$result++;
}

if ($question24 == "0.725" or $question24 == "0,725") {
	$result++;
}

if ($question25 == "1.575" or $question25 == "1,575") {
	$result++;
}

if ($question26 == "3.3" or $question26 == "3,3") {
	$result++;
}

if ($question27 == "128000") {
	$result++;
}

if ($question28 == "32000") {
	$result++;
}

if ($question29 == "3550") {
	$result++;
}

if ($question30 == "22450") {
	$result++;
}

$sqlupdate = "UPDATE `ptest` SET block_2='".$result."' WHERE studentid='".$studentid."'";

if ($conn->query($sqlupdate) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sqlupdate . "<br>" . $conn->error;
	}

checkTime($studentid);
?>


<h1> Percentage 10 Points </h1>
		
		<form method="post" action="Expressions.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
		
			<p> What is </p>
			
			<label><b>1.</b> 10 % of 2500 =</label> 
			<input type="text" id="question31" name="question31"> <br><br>
			
			<label><b>2.</b> 30 % of 4700  =</label> 
			<input type="text" id="question32" name="question32"> <br><br>
			
			<label><b>3.</b> 50 % of 7500 =</label> 
			<input type="text" id="question33" name="question33"> <br><br>
			
			<label><b>4.</b> 80 % of 9200 =</label> 
			<input type="text" id="question34" name="question34"> <br><br>

			<label><b>5.</b> 15 % of 1100 =</label> 
			<input type="text" id="question35" name="question35"> <br><br>

			<label><b>6.</b> 35 % of 2200 =</label> 
			<input type="text" id="question36" name="question36"> <br><br>

			<label><b>7.</b> 42 % of 4800  =</label> 
			<input type="text" id="question37" name="question37"> <br><br>

			<br><p>Find the Percentage</p>
			
			<label><b>8.</b> 1500ml out of 2500ml =</label> 
			<input type="text" id="question38" name="question38"> <br><br>

			<label><b>9.</b> 1200ml out of 4000ml =</label> 
			<input type="text" id="question39" name="question39"> <br><br>
			
			<label><b>10.</b> 650ml out of 1000ml =</label> 
			<input type="text" id="question40" name="question40"> <br><br>

			<input type="submit" value="Submit Answers">

		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>