<?php
include_once 'header.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$name = $_POST["name"];
$studentid =  $_POST["studentid"];
$result = 0;

//Answers from Percentage
$question31 = clean($_POST["question31"]);
$question32 = clean($_POST["question32"]);
$question33 = clean($_POST["question33"]);
$question34 = clean($_POST["question34"]);
$question35 = clean($_POST["question35"]);
$question36 = clean($_POST["question36"]);
$question37 = clean($_POST["question37"]);
$question38 = clean($_POST["question38"]);
$question39 = clean($_POST["question39"]);
$question40 = clean($_POST["question40"]);

//Check Answers from Percentage
if ($question31 == "250") {
	$result++;
}

if ($question32 == "1410") {
	$result++;
}

if ($question33 == "3750") {
	$result++;
}

if ($question34 == "7360") {
	$result++;
}

if ($question35 == "165") {
	$result++;
}

if ($question36 == "770") {
	$result++;
}

if ($question37 == "2016") {
	$result++;
}

if ($question38 == "60") {
	$result++;
}

if ($question39 == "30") {
	$result++;
}

if ($question40 == "65") {
	$result++;
}

echo $result;
?>


<h1> Expressions / Simplify/  Division & Multiplication (by 10,100,1000) 10 Points </h1>
		
		<form method="post" action="RomanNumbers.php"> 

			<br><p> Calculate </p>

			<input type="hidden" name='name' value="<?php echo $name; ?>">
			<input type="hidden" name='studentid' value="<?php echo $studentid; ?>">

			<label><b>1.</b> X + 45 = 35 then X = </label> 
			<input type="text" id="question41" name="question41"> <br><br>
			
			<label><b>2.</b> X - 526 = 445 then X = </label> 
			<input type="text" id="question42" name="question42"> <br><br>

			<label><b>3.</b> If X = 5 then 2X+3-X = </label> 
			<input type="text" id="question43" name="question43"> <br><br>

			
			<br><p> Simplify </p>
			
			<label><b>1.</b> 275 / 400 =</label> 
			<input type="text" id="question44" name="question44"> <br><br>

			
			<label><b>2.</b> 60 / 375 =</label> 
			<input type="text" id="question45" name="question45"> <br><br>

			
			<label><b>3.</b> 125 / 300 =</label> 
			<input type="text" id="question46" name="question46"> <br><br>

			<br><p> Division & Multiplication </p>
			
			<label><b>1.</b> 8.25 / 1000  =</label> 
			<input type="text" id="question47" name="question47"> <br><br>
			
			<label><b>2.</b> 6.26 X 100 =</label> 
			<input type="text" id="question48" name="question48"> <br><br>

			<label><b>3.</b> 3.87 X 10 =</label> 
			<input type="text" id="question49" name="question49"> <br><br>
			
			<label><b>4.</b> 2.29 / 100 =</label> 
			<input type="text" id="question50" name="question50"> <br><br>

			<input type="submit" value="Submit Answers">

		</form>

<?php
} else {
	echo '<p> Enter Name and Student Id to take the test</p> <a href="index.php"> To the login page </a>';
}
include_once 'footer.php'
?>