<?php
include("../../config.php");


extract($_POST);

$delTest = $dbh->query("DELETE  FROM test_tbl WHERE test_id='$id';
DELETE  FROM test_question_tbl WHERE test_id='$id';
");
if ($delTest) {
	$res = array("res" => "success");
} else {
	$res = array("res" => "failed");
}


echo json_encode($res);
?>