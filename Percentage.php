<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$tulos3 = $_POST["tulos3"];
?>


<h1> Percentage 10 Points </h1>
		
		<form method="post" action="Expressions.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
		
			<p> What is </p> <br>
			
			<label><b>1.</b> 10 % of 2500 =</label> 
			<input type="text" id="question11" name="question11" value="<?php $question11; ?>"> <br><br>
			
			<?php 
			if ($question11 == "250") {
			    $tulos3 = 1;
			} else{
			    $tulos3 = 0;
			}
			?>	
			
			<label><b>2.</b> 30 % of 4700  =</label> 
			<input type="text" id="question12" name="question12" value="<?php $question12; ?>"> <br><br>
			
			<?php 
			if ($question12 == "1410") {
			    $tulos3 = 1;
			}
			?>	
			
			<label><b>3.</b> 50 % of 7500 =</label> 
			<input type="text" id="question13" name="question13" value="<?php $question13; ?>"> <br><br>
			
			<?php 
			if ($question13 == "3750") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>4.</b> 80 % of 9200 =</label> 
			<input type="text" id="question14" name="question14" value="<?php $question14; ?>"> <br><br>
			
			<?php 
			if ($question14 == "7360") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>5.</b> 15 % of 1100 =</label> 
			<input type="text" id="question15" name="question15" value="<?php $question15; ?>"> <br><br>
			
			<?php 
			if ($question15 == "165") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>6.</b> 35 % of 2200 =</label> 
			<input type="text" id="question16" name="question16" value="<?php $question16; ?>"> <br><br>
			
			<?php 
			if ($question16 == "770") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>7.</b> 42 % of 4800  =</label> 
			<input type="text" id="question17" name="question17" value="<?php $question17; ?>"> <br><br>
			
			<?php 
			if ($question17 == "2016") {
			    $tulos3 = 1;
			}
			?>
			
			<br><p>Find the Percentage</p>
			
			<label><b>8.</b> 1500ml out of 2500ml =</label> 
			<input type="text" id="question18" name="question18" value="<?php $question18; ?>"> <br><br>
			
			<?php 
			if ($question18 == "60%" or $question18 == "60 %") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>9.</b> 1200ml out of 4000ml =</label> 
			<input type="text" id="question19" name="question19" value="<?php $question19; ?>"> <br><br>
			
			<?php 
			if ($question19 == "30%" or $question19 == "30 %") {
			    $tulos3 = 1;
			}
			?>
			
			<label><b>10.</b> 650ml out of 1000ml =</label> 
			<input type="text" id="question20" name="question20" value="<?php $question20; ?>"> <br><br>
			
			<?php 
			if ($question20 == "65%" or $question20 == "65 %") {
			    $tulos3 = 1;
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