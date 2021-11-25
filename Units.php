<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
?>

<h1> Units 20 Points </h1>
		
		<form method="post" action="Percentage.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">

			<p> Change to milligrams </p>
			
			<label><b>1.</b> 925 micrograms =</label> 
			<input type="text" id="mg1" name="mg1"> <br><br>
			
			<label><b>2.</b> 200 micrograms  =</label> 
			<input type="text" id="mg2" name="mg2"> <br><br>
			
			<label><b>3.</b> 1386 micrograms =</label> 
			<input type="text" id="mg3" name="mg3"> <br><br>
			
			<label><b>4.</b> 500 micrograms =</label> 
			<input type="text" id="mg4" name="mg4"> <br><br>
			
			<p> Change to grams </p>
			
			<label><b>1.</b> 7260 mg =</label> 
			<input type="text" id="grams1" name="grams1"> <br><br>
			
			<label><b>2.</b> 80 mg =</label> 
			<input type="text" id="grams2" name="qrams2"> <br><br>
			
			<label><b>3.</b> 135 mg  =</label> 
			<input type="text" id="grams3" name="grams3"> <br><br>
			
			<label><b>4.</b> 1250 mg =</label> 
			<input type="text" id="grams4" name="grams4"> <br><br>
			
			<p> Change to Milliliters </p>
			
			<label><b>1.</b> 4.5 L =</label> 
			<input type="text" id="ml1" name="ml1"> <br><br>
			
			<label><b>2.</b> 0.9 L =</label> 
			<input type="text" id="ml2" name="ml2"> <br><br>
			
			<label><b>3.</b> 8.5 L =</label> 
			<input type="text" id="ml3" name="ml3"> <br><br>
			
			<label><b>4.</b> 2.2 L =</label> 
			<input type="text" id="ml4" name="ml4"> <br><br>
			
			<p> Change to Liters </p>
			
			<label><b>1.</b>  70 ml =</label> 
			<input type="text" id="l1" name="l1"> <br><br>
			
			<label><b>2.</b> 725 ml =</label> 
			<input type="text" id="l2" name="l2"> <br><br>
			
			<label><b>3.</b> 1575 ml =</label> 
			<input type="text" id="l3" name="l3"> <br><br>
			
			<label><b>4.</b> 3300 ml =</label> 
			<input type="text" id="l4" name="l4"> <br><br>
			
			<p> Change to micrometer </p>
			
			<label><b>1.</b> 128 mm =</label> 
			<input type="text" id="micrometer1" name="micrometer1"> <br><br>
			
			<label><b>2.</b>  32 mm =</label> 
			<input type="text" id="micrometer2" name="micrometer2"> <br><br>
			
			<label><b>3.</b> 3.55 mm =</label> 
			<input type="text" id="micrometer3" name="micrometer3"> <br><br>
			
			<label><b>4.</b> 22.45 mm =</label> 
			<input type="text" id="micrometer4" name="micrometer4"> <br><br>
			
			<input type="submit" value="Submit Answers">
		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>