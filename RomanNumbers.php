<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$tulos5 = $_POST["tulos5"];
?>

<h1> Roman Numbers 10 Points </h1>
		
		<form method="post" action="Results.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
			
			<label><b>1.</b> IX =</label> 
			<input type="text" id="question31" name="question31" value="<?php $question31; ?>"> <br><br>
			
			<?php 
			if ($question31 == "9") {
			    $tulos5 = 1;
			} else{
			    $tulos5 = 0;
			}
			?>
			
			<label><b>2.</b> XXXIX  =</label> 
			<input type="text" id="question32" name="question32" value="<?php $question32; ?>"> <br><br>
			
			<?php 
			if ($question32 == "39") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>3.</b> XXII =</label> 
			<input type="text" id="question33" name="question33" value="<?php $question33; ?>"> <br><br>
			
			<?php 
			if ($question33 == "22") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>4.</b> XVI =</label> 
			<input type="text" id="question34" name="question34" value="<?php $question34; ?>"> <br><br>
			
			<?php 
			if ($question34 == "16") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>5.</b> XLIV =</label> 
			<input type="text" id="question35" name="question35" value="<?php $question35; ?>"> <br><br>
			
			<?php 
			if ($question35 == "44") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>6.</b> 48 =</label> 
			<input type="text" id="question36" name="question36" value="<?php $question36; ?>"> <br><br>
			
			<?php 
			if ($question36 == "XLVIII") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>7.</b> 32 =</label> 
			<input type="text" id="question37" name="question37" value="<?php $question37; ?>"> <br><br>
			
			<?php 
			if ($question37 == "XXXII") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>8.</b> 20 =</label> 
			<input type="text" id="question38" name="question38" value="<?php $question38; ?>"> <br><br>
			
			<?php 
			if ($question38 == "XX") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>9.</b> 14 =</label> 
			<input type="text" id="question39" name="question39" value="<?php $question39; ?>"> <br><br>
			
			<?php 
			if ($question39 == "XIV") {
			    $tulos5 = 1;
			}
			?>
			
			<label><b>10.</b> 46 =</label> 
			<input type="text" id="question40" name="question40" value="<?php $question40; ?>"> <br><br>

			<?php 
			if ($question40 == "XLVI") {
			    $tulos5 = 1;
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