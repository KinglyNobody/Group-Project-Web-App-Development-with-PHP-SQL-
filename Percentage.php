<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
?>


<h1> Percentage 10 Points </h1>
		
		<form method="post" action="Expressions.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
		
			<p> What is </p> <br>
			
			<label><b>1.</b> 10 % of 2500 =</label> 
			<input type="text" id="question1" name="question1"> <br><br>
			
			<label><b>2.</b> 30 % of 4700  =</label> 
			<input type="text" id="question2" name="question2"> <br><br>
			
			<label><b>3.</b> 50 % of 7500 =</label> 
			<input type="text" id="question3" name="question3"> <br><br>
			
			<label><b>4.</b> 80 % of 9200 =</label> 
			<input type="text" id="question4" name="question4"> <br><br>
			
			<label><b>5.</b> 15 % of 1100 =</label> 
			<input type="text" id="question5" name="question5"> <br><br>
			
			<label><b>6.</b> 35 % of 2200 =</label> 
			<input type="text" id="question6" name="question6"> <br><br>
			
			<label><b>7.</b> 42 % of 4800  =</label> 
			<input type="text" id="question7" name="question7"> <br><br>
			
			<br><p>Find the Percentage</p>
			
			<label><b>8.</b> 1500ml out of 2500ml =</label> 
			<input type="text" id="question8" name="question8"> <br><br>
			
			<label><b>9.</b> 1200ml out of 4000ml =</label> 
			<input type="text" id="question9" name="question9"> <br><br>
			
			<label><b>10.</b> 650ml out of 1000ml =</label> 
			<input type="text" id="question10" name="question10"> <br><br>

			<input type="submit" value="Submit Answers">

		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>