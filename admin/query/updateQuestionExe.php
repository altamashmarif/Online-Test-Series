<?php
 include("../../config.php");
 extract($_POST);


$updCourse = $dbh->query("UPDATE test_question_tbl SET test_question='$question', test_ch1='$test_ch1', test_ch2='$test_ch2', test_ch3='$test_ch3', test_ch4='$test_ch4', test_answer='$test_final', test_explain='$test_explain' WHERE tqt_id='$question_id' ");
if($updCourse)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>