<?php 
  include("../../config.php");


extract($_POST);

$delTest = $dbh->query("DELETE  FROM test_question_tbl WHERE tqt_id='$id'  ");
if($delTest)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>