<?php 
include("../../config.php");

extract($_POST);

$delCourse = $dbh->query("DELETE  FROM course_tbl WHERE cou_id='$id'  ");
if($delCourse)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}
	echo json_encode($res);
 ?>