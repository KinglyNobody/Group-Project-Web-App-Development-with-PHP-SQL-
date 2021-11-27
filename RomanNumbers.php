<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$result = 0;

//Answers from Expressions
$question41 = clean($_POST["question41"]);
$question42 = clean($_POST["question42"]);
$question43 = clean($_POST["question43"]);
$question44 = clean($_POST["question44"]);
$question45 = clean($_POST["question45"]);
$question46 = clean($_POST["question46"]);
$question47 = clean($_POST["question47"]);
$question48 = clean($_POST["question48"]);
$question49 = clean($_POST["question49"]);
$question50 = clean($_POST["question50"]);

//Check Answers from Expressions
if ($question41 == "-10") {
	$result++;
}

if ($question42 == "971") {
	$result++;
}

if ($question43 == "8") {
	$result++;
}

if ($question44 == "11/16") {
	$result++;
}

if ($question45 == "4/25") {
	$result++;
}

if ($question46 == "5/12") {
	$result++;
}

if ($question47 == "0.00825" or $question47 == "0,00825") {
	$result++;
}

if ($question48 == "626.00" or $question48 == "626,00") {
	$result++;
}

if ($question49 == "38.70" or $question49 == "38,70") {
	$result++;
}

if ($question50 == "0.0229" or $question50 == "0,0229") {
	$result++;
}
echo $result
?>

<h1> Roman Numbers 10 Points </h1>
		
		<form method="post" action="Results.php"> 
			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">
			
			<label><b>1.</b> IX =</label> 
			<input type="text" id="question51" name="question51"> <br><br>
			
			<label><b>2.</b> XXXIX =</label> 
			<input type="text" id="question52" name="question52"> <br><br>
			
			<label><b>3.</b> XXII =</label> 
			<input type="text" id="question53" name="question53"> <br><br>
			
			<label><b>4.</b> XVI =</label> 
			<input type="text" id="question54" name="question54"> <br><br>
			
			<label><b>5.</b> XLIV =</label> 
			<input type="text" id="question55" name="question55"> <br><br>
			
			<label><b>6.</b> 48 =</label> 
			<input type="text" id="question56" name="question56"> <br><br>
			
			<label><b>7.</b> 32 =</label> 
			<input type="text" id="question57" name="question57"> <br><br>

			<label><b>8.</b> 20 =</label> 
			<input type="text" id="question58" name="question58"> <br><br>
			
			<label><b>9.</b> 14 =</label> 
			<input type="text" id="question59" name="question59"> <br><br>
			
			<label><b>10.</b> 46 =</label> 
			<input type="text" id="question60" name="question60"> <br><br>

			<input type="submit" value="Submit Answers">

		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>