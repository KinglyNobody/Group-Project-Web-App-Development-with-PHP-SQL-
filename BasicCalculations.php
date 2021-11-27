<?php
session_start();
include_once 'header.php';
require 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = clean($_POST["name"]);
	$studentid =  clean($_POST["studentid"]);

	if (checkStudentId($studentid) == 1) {
		echo "<p>You have already taken the test!</p>";
		die();
	} else {
		$sqlinsert = "INSERT INTO `ptest` (`studentid`, `name`, `start_time`, `end_time`) VALUES ('".$studentid."', '".$name."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP + INTERVAL 60 MINUTE)";
		if ($conn->query($sqlinsert) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sqlinsert . "<br>" . $conn->error;
		}

		checkTime($studentid);

?>

	<h1> Basic Calculations 10 points </h1>
			
			<form method="post" action="Units.php"> 
				
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
			
				<label><b>1.</b> 98 - 56 + 45 =</label> 
				<input type="text" id="question1" name="question1"> <br><br>	
				
				<label><b>2.</b> 376 - 678 + 236  =</label> 
				<input type="text" id="question2" name="question2"> <br><br>
				
				<label><b>3.</b> 6 X 7-9 X 5 =</label> 
				<input type="text" id="question3" name="question3"> <br><br>
				
				<label><b>4.</b> 6 X 7-9 X 5 =</label> 
				<input type="text" id="question4" name="question4"> <br><br>
				
				<label><b>5.</b> 5.6 X 34 + 21 / 7 =</label> 
				<input type="text" id="question5" name="question5"> <br><br>
				
				<label><b>6.</b> 123.45 X 5.5 =</label> 
				<input type="text" id="question6" name="question6"> <br><br>
				
				<label><b>7.</b> 3276.45 / 8  =</label> 
				<input type="text" id="question7" name="question7"> <br><br>

				<label><b>8.</b> 748.5 / 1.5 =</label> 
				<input type="text" id="question8" name="question8"> <br><br>
				
				<label><b>9.</b> 45600 / 100 =</label> 
				<input type="text" id="question9" name="question9"> <br><br>

				<label><b>10.</b> 8763 X 100 =</label> 
				<input type="text" id="question10" name="question10"> <br><br>
				
				<input type="submit" value="Submit Answers">
			</form>

	<?php
	}

} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>
