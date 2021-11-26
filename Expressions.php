<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$tulos4 = $_POST["tulos4"];
?>


<h1> Expressions / Simplify/  Division & Multiplication (by 10,100,1000) 10 Points </h1>
		
		<form method="post" action="RomanNumbers.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">

			<label><b>1.</b> X + 45 = 35 	What is X? =</label> 
			<input type="text" id="question21" name="question21" value="<?php $question21; ?>"> <br><br>
			
			<?php 
			if ($question21 == "-10") {
			    $tulos4 = 1;
			} else{
			    $tulos4 = 0;
			}
			?>	
			
			<label><b>2.</b> X - 526 = 445	What is X?</label> 
			<input type="text" id="question22" name="question22" value="<?php $question22; ?>"> <br><br>
			
			<?php 
			if ($question22 == "971") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>3.</b> If X = 5 then 	2X+3-X =</label> 
			<input type="text" id="question23" name="question23" value="<?php $question23; ?>"> <br><br>
			
			<?php 
			if ($question23 == "8") {
			    $tulos4 + 1;
			}
			?>
			
			<br><p> Simplify </p> <br>
			
			<label><b>1.</b> 275 / 400 =</label> 
			<input type="text" id="question24" name="question24" value="<?php $question24; ?>"> <br><br>
			
			<?php 
			if ($question24 == "11/16") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>2.</b> 60 / 375 =</label> 
			<input type="text" id="question25" name="question25" value="<?php $question25; ?>"> <br><br>
			
			<?php 
			if ($question25 == "4/25") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>3.</b> 125 / 300 =</label> 
			<input type="text" id="question26" name="question26" value="<?php $question26; ?>"> <br><br>
			
			<?php 
			if ($question26 == "5/12") {
			    $tulos4 + 1;
			}
			?>
			
			<br><p> Division & Multiplication </p> <br>
			
			<label><b>1.</b> 8.25 / 1000  =</label> 
			<input type="text" id="question27" name="question27" value="<?php $question27; ?>"> <br><br>
			
			<?php 
			if ($question27 == "0.00825" or $question27 == "0,00825") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>2.</b> 6.26 X 100 =</label> 
			<input type="text" id="question28" name="question28" value="<?php $question28; ?>"> <br><br>
			
			<?php 
			if ($question28 == "626.00" or $question28 == "626,00") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>3.</b> 3.87 X 10 =</label> 
			<input type="text" id="question29" name="question29" value="<?php $question29; ?>"> <br><br>
			
			<?php 
			if ($question29 == "38.70" or $question29 == "38,70") {
			    $tulos4 + 1;
			}
			?>
			
			<label><b>4.</b> 2.29 / 100 =</label> 
			<input type="text" id="question30" name="question30" value="<?php $question30; ?>"> <br><br>
			
			<?php 
			if ($question30 == "0.0229" or $question30 == "0,0229") {
			    $tulos4 + 1;
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