<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$tulos = $_POST["tulos"];
?>

<h1> Basic Calculations 10 points </h1>
		
		<form method="post" action="Units.php"> 
			
		<input type="hidden" name='name' value="<?php echo $name; ?>">
		<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
		
			<label><b>1.</b> 98 - 56 + 45 =</label> 
			<input type="text" id="question1" name="question1" value="<?php $question1; ?>"> <br><br>
			
			<?php 
			if ($question1 == "87") {
			    $tulos = 1;
			} else{
			    $tulos = 0;
			}
			?>	
			
			<label><b>2.</b> 376 - 678 + 236  =</label> 
			<input type="text" id="question2" name="question2" value="<?php $question2; ?>"> <br><br>
			
			<?php 
			if ($question2 == "-66") {
			    $tulos + 1;
			} 
			?>	
			
			<label><b>3.</b> 6 X 7-9 X 5 =</label> 
			<input type="text" id="question3" name="question3" value="<?php $question3; ?>"> <br><br>
			
			<?php 
			if ($question3 == "-3") {
			    $tulos + 1;
			}
			?>
			
			<label><b>4.</b> 6 X 7-9 X 5 =</label> 
			<input type="text" id="question4" name="question4" value="<?php $question4; ?>"> <br><br>
			
			<?php 
			if ($question4 == "-80") {
			    $tulos + 1;
			}
			?>
			
			<label><b>5.</b> 5.6 X 34 + 21 / 7 =</label> 
			<input type="text" id="question5" name="question5" value="<?php $question5; ?>"> <br><br>
			
			<?php 
			if ($question5 == "193.4" or $question5 == "193,4" ) {
			    $tulos + 1;
			} 
			?>
			
			<label><b>6.</b> 123.45 X 5.5 =</label> 
			<input type="text" id="question6" name="question6" value="<?php $question6; ?>"> <br><br>
			
			<?php 
			if ($question6 == "678.975" or $question6 == "678,975" ) {
			    $tulos + 1;
			} 
			?>
			
			<label><b>7.</b> 3276.45 / 8  =</label> 
			<input type="text" id="question7" name="question7" value="<?php $question7; ?>"> <br><br>
			
			<?php 
			if ($question7 == "409.55" or $guestion7 == "409,55") {
			    $tulos + 1;
			} 
			?>
			
			<label><b>8.</b> 748.5 / 1.5 =</label> 
			<input type="text" id="question8" name="question8" value="<?php $question8; ?>"> <br><br>
			
			<?php 
			if ($question8 == "499") {
			    $tulos + 1;
			}  
			?>
			
			<label><b>9.</b> 45600 / 100 =</label> 
			<input type="text" id="question9" name="question9" value="<?php $question9; ?>"> <br><br>
			
			<?php 
			if ($question9 == "456") {
			    $tulos + 1;
			}   
			?>
			
			<label><b>10.</b> 8763 X 100 =</label> 
			<input type="text" id="question10" name="question10" value="<?php $question10; ?>"> <br><br>
			
			<?php 
			if ($question10 == "876300") {
			    $tulos + 1;
			}   
			?>
			
			<input type="submit" value="Submit Answers">
		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>
