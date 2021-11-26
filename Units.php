<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$tulos = 
$tulos2 = $_POST["tulos2"];
?>

<h1> Units 20 Points </h1>
		
		<form method="post" action="Percentage.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">

			<p> Change to milligrams </p>
			
			<label><b>1.</b> 925 micrograms =</label> 
			<input type="text" id="mg1" name="mg1" value="<?php $mg1; ?>"> <br><br>
			
			<?php 
			if ($mg1 == "0.925 mg" or $mg1 == "0,925 mg") {
			    $tulos2 = 1;
			} else{
			    $tulos2 = 0;
			}
			?>
			
			<label><b>2.</b> 200 micrograms  =</label> 
			<input type="text" id="mg2" name="mg2" value="<?php $mg2; ?>"> <br><br>
			
			<?php 
			if ($mg2 == "0.2 mg" or $mg2 == "0,2 mg") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>3.</b> 1386 micrograms =</label> 
			<input type="text" id="mg3" name="mg3" value="<?php $mg3; ?>"> <br><br>
			
			<?php 
			if ($mg3 == "1.386 mg" or $mg3 == "1,386 mg") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>4.</b> 500 micrograms =</label> 
			<input type="text" id="mg4" name="mg4" value="<?php $mg4; ?>"> <br><br>
			
			<?php 
			if ($mg4 == "1.386 mg" or $mg4 == "1,386 mg") {
			    $tulos2 + 1;
			}
			?>
			
			<p> Change to grams </p>
			
			<label><b>1.</b> 7260 mg =</label> 
			<input type="text" id="grams1" name="grams1" value="<?php $grams1; ?>"> <br><br>
			
			<?php 
			if ($grams1 == "7.26 g" or $grams1 == "7,26 g") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>2.</b> 80 mg =</label> 
			<input type="text" id="grams2" name="qrams2" value="<?php $grams2; ?>"> <br><br>
			
			<?php 
			if ($grams2 == "0.08 g" or $grams2 == "0,08 g") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>3.</b> 135 mg  =</label> 
			<input type="text" id="grams3" name="grams3" value="<?php $grams3; ?>"> <br><br>
			
			<?php 
			if ($grams3 == "0.135 g" or $grams3 == "0,135 g") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>4.</b> 1250 mg =</label> 
			<input type="text" id="grams4" name="grams4" value="<?php $grams4; ?>"> <br><br>
			
			<?php 
			if ($grams4 == "1.25 g" or $grams4 == "1,25 g") {
			    $tulos2 + 1;
			}
			?>
			
			<p> Change to Milliliters </p>
			
			<label><b>1.</b> 4.5 L =</label> 
			<input type="text" id="ml1" name="ml1" value="<?php $ml1; ?>"> <br><br>
			
			<?php 
			if ($ml1 == "4500 ml") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>2.</b> 0.9 L =</label> 
			<input type="text" id="ml2" name="ml2" value="<?php $ml2; ?>"> <br><br>
			
			<?php 
			if ($ml2 == "900 ml") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>3.</b> 8.5 L =</label> 
			<input type="text" id="ml3" name="ml3" value="<?php $ml3; ?>"> <br><br>
			
			<?php 
			if ($ml3 == "8500 ml") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>4.</b> 2.2 L =</label> 
			<input type="text" id="ml4" name="ml4" value="<?php $ml4; ?>"> <br><br>
			
			<?php 
			if ($ml4 == "2200 ml") {
			    $tulos2 + 1;
			}
			?>
			
			<p> Change to Liters </p>
			
			<label><b>1.</b>  70 ml =</label> 
			<input type="text" id="l1" name="l1" value="<?php $l1; ?>"> <br><br>
			
			<?php 
			if ($l1 == "0.07 l" or $l1 == "0,07 l") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>2.</b> 725 ml =</label> 
			<input type="text" id="l2" name="l2" value="<?php $l2; ?>"> <br><br>
			
			<?php 
			if ($l2 == "0.725 l" or $l2 == "0,725 l") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>3.</b> 1575 ml =</label> 
			<input type="text" id="l3" name="l3" value="<?php $l3; ?>"> <br><br>
			
			<?php 
			if ($l3 == "1.575 l" or $l3 == "1,575 l") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>4.</b> 3300 ml =</label> 
			<input type="text" id="l4" name="l4" value="<?php $l4; ?>"> <br><br>
			
			<?php 
			if ($l4 == "3.3 l" or $l4 == "3,3 l") {
			    $tulos2 + 1;
			}
			?>
			
			<p> Change to micrometer </p>
			
			<label><b>1.</b> 128 mm =</label> 
			<input type="text" id="micrometer1" name="micrometer1" value="<?php $micrometer1; ?>"> <br><br>
			
			<?php 
			if ($micrometer1 == "128000 micrometer") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>2.</b>  32 mm =</label> 
			<input type="text" id="micrometer2" name="micrometer2" value="<?php $micrometer2; ?>"> <br><br>
			
			<?php 
			if ($micrometer2 == "32000 micrometer") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>3.</b> 3.55 mm =</label> 
			<input type="text" id="micrometer3" name="micrometer3" value="<?php $micrometer3; ?>"> <br><br>
			
			<?php 
			if ($micrometer3 == "3550 micrometer") {
			    $tulos2 + 1;
			}
			?>
			
			<label><b>4.</b> 22.45 mm =</label> 
			<input type="text" id="micrometer4" name="micrometer4" value="<?php $micrometer4; ?>"> <br><br>
			
			<?php 
			if ($micrometer4 == "22450 micrometer") {
			    $tulos2 + 1;
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