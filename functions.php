<?php
function clean($query) {
	$query = trim($query);
	$query = strip_tags($query);
	$query = stripslashes($query);

	$query=str_replace("'", "&apos;", $query);
	$query=str_replace("´", "&apos;", $query);
	$query=str_replace("`", "&apos;", $query);
	$query=str_replace("\"", "&quot;", $query);

	return $query;
}
function checkStudentId($studentid) {
	$sql = "SELECT COUNT(*) FROM `ptest` WHERE `studentid` = '". $studentid ."'";
	$query = mysqli_fetch_row(mysqli_query($GLOBALS['conn'], $sql));
	$count = $query[0];

	if ($count > 0)
		return 1;
	else
		return 0;
}

function checkTime($studentid) {
	$sql = "SELECT end_time FROM `ptest` WHERE `studentid` = '". $studentid ."' ";
	$current_time = new DateTime();

	if ($GLOBALS['conn']->query($sql)) {
		$table = $GLOBALS['conn'] -> query($sql);
		$row = $table -> fetch_array(MYSQLI_ASSOC);

		$end_time = strtotime($row["end_time"]);
		$cur_time = strtotime(now);

		if ($cur_time >= $end_time) {
			echo '<p style="margin-top: 5em;">Time is up! <a href="Results.php?studentid='.$studentid.'">See your results</p>';
			die();
		}
	} else {
		echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;

	};
	
}
?>