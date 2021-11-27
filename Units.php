<?php
include_once 'header.php';
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$result = 0;

//Answers from Basic Calculations
$question1 = clean($_POST["question1"]);
$question2 = clean($_POST["question2"]);
$question3 = clean($_POST["question3"]);
$question4 = clean($_POST["question4"]);
$question5 = clean($_POST["question5"]);
$question6 = clean($_POST["question6"]);
$question7 = clean($_POST["question7"]);
$question8 = clean($_POST["question8"]);
$question9 = clean($_POST["question9"]);
$question10 = clean($_POST["question10"]);

//Check Answers from Basic Calculations
if ($question1 == "87") {
	$result++;
}

if ($question2 == "-66") {
	$result++;
}

if ($question3 == "-3") {
	$result++;
}

if ($question4 == "-80") {
	$result++;
}

if ($question5 == "193.4" or $question5 == "193,4" ) {
	$result++;
} 

if ($question6 == "678.975" or $question6 == "678,975" ) {
	$result++;
}

if ($question7 == "409.55" or $question7 == "409,55") {
	$result++;
}

if ($question8 == "499") {
	$result++;
}

if ($question9 == "456") {
	$result++;
}

if ($question10 == "876300") {
	$result++;
}

$sqlupdate = "UPDATE `ptest` SET block_1='".$result."' WHERE studentid='".$studentid."'";

if ($conn->query($sqlupdate) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sqlupdate . "<br>" . $conn->error;
	}
checkTime($studentid);
?>

<h1> Units 20 Points </h1>
		
		<form method="post" action="Percentage.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">

			<p> Change to milligrams </p>
			
			<label><b>1.</b> 925 μg =</label> 
			<input type="text" id="question11" name="question11"> <br><br>
			
			<label><b>2.</b> 200 μg  =</label> 
			<input type="text" id="question12" name="question12"> <br><br>
			
			<label><b>3.</b> 1386 μg =</label> 
			<input type="text" id="question13" name="question13"> <br><br>
			
			<label><b>4.</b> 500 μg =</label> 
			<input type="text" id="question14" name="question14"> <br><br>

			<p> Change to grams </p>
			
			<label><b>1.</b> 7260 mg =</label> 
			<input type="text" id="question15" name="question15"> <br><br>
			
			<label><b>2.</b> 80 mg =</label> 
			<input type="text" id="question16" name="question16"> <br><br>
			
			<label><b>3.</b> 135 mg  =</label> 
			<input type="text" id="question17" name="question17"> <br><br>
			
			<label><b>4.</b> 1250 mg =</label> 
			<input type="text" id="question18" name="question18"> <br><br>
			
			<p> Change to Milliliters </p>
			
			<label><b>1.</b> 4.5 L =</label> 
			<input type="text" id="question19" name="question19"> <br><br>
			
			<label><b>2.</b> 0.9 L =</label> 
			<input type="text" id="question20" name="question20"> <br><br>
			
			<label><b>3.</b> 8.5 L =</label> 
			<input type="text" id="question21" name="question21"> <br><br>
			
			<label><b>4.</b> 2.2 L =</label> 
			<input type="text" id="question22" name="question22"> <br><br>
			
			<p> Change to Liters </p>
			
			<label><b>1.</b>  70 ml =</label> 
			<input type="text" id="question23" name="question23"> <br><br>
			
			<label><b>2.</b> 725 ml =</label> 
			<input type="text" id="question24" name="question24"> <br><br>
			
			<label><b>3.</b> 1575 ml =</label> 
			<input type="text" id="question25" name="question25"> <br><br>
			
			<label><b>4.</b> 3300 ml =</label> 
			<input type="text" id="question26" name="question26"> <br><br>
			
			<p> Change to micrometer </p>
			
			<label><b>1.</b> 128 mm =</label> 
			<input type="text" id="question27" name="question27"> <br><br>
			
			<label><b>2.</b>  32 mm =</label> 
			<input type="text" id="question28" name="question28"> <br><br>

			
			<label><b>3.</b> 3.55 mm =</label> 
			<input type="text" id="question29" name="question29"> <br><br>

			<label><b>4.</b> 22.45 mm =</label> 
			<input type="text" id="question30" name="question30"> <br><br>
			
			<input type="submit" value="Submit Answers">
		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>