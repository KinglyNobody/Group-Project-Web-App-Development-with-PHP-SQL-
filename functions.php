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
function checkStudentId() {
	$sql = "SELECT COUNT(*) FROM `b_koira` WHERE `aktiivinen` = '1'";
	$query = mysqli_fetch_row(mysqli_query($GLOBALS['con'], $sql));
	$lkm = $query[0];

	if ($lkm > 0)
		return $lkm;
	else
		return 0;
}
?>