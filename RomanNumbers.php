<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
?>

<h1> Roman Numbers 10 Points </h1>
		
		<form method="post" action="Results.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
			
			<label><b>1.</b> IX =</label> 
			<input type="text" id="question1" name="question1"> <br><br>
			
			<label><b>2.</b> XXXIX  =</label> 
			<input type="text" id="question2" name="question2"> <br><br>
			
			<label><b>3.</b> XXII =</label> 
			<input type="text" id="question3" name="question3"> <br><br>
			
			<label><b>4.</b> XVI =</label> 
			<input type="text" id="question4" name="question4"> <br><br>
			
			<label><b>5.</b> XLIV =</label> 
			<input type="text" id="question5" name="question5"> <br><br>
			
			<label><b>6.</b> 48 =</label> 
			<input type="text" id="question6" name="question6"> <br><br>
			
			<label><b>7.</b> 32 =</label> 
			<input type="text" id="question7" name="question7"> <br><br>
			
			<label><b>8.</b> 20 =</label> 
			<input type="text" id="question8" name="question8"> <br><br>
			
			<label><b>9.</b> 14 =</label> 
			<input type="text" id="question9" name="question9"> <br><br>
			
			<label><b>10.</b> 46 =</label> 
			<input type="text" id="question10" name="question10"> <br><br>

			<input type="submit" value="Submit Answers">

		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>