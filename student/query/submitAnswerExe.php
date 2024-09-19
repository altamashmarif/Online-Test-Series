<?php
 session_start(); 
 include("../../config.php");
 extract($_POST);

 $exmne_id = $_SESSION['examineeSession']['exmne_id'];



$selExAttempt = $dbh->query("SELECT * FROM test_attempt WHERE student_id='$exmne_id' AND test_id='$test_id'  ");

$selAns = $dbh->query("SELECT * FROM test_answers WHERE student_id='$exmne_id' AND test_id='$test_id' ");


if($selExAttempt->rowCount() > 0)
{
	$res = array("res" => "alreadyTaken");
}
else if($selAns->rowCount() > 0)
{
	$updLastAns = $dbh->query("UPDATE test_answers SET testans_status='old' WHERE student_id='$exmne_id' AND test_id='$test_id'  ");
	if($updLastAns)
	{
		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $dbh->query("INSERT INTO test_answers(student_id,test_id,quest_id,testans_answer) VALUES('$exmne_id','$test_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $dbh->query("INSERT INTO test_attempt(student_id,test_id)  VALUES('$exmne_id','$test_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}
	}
}
else
{

		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $dbh->query("INSERT INTO test_answers(student_id,test_id,quest_id,testans_answer) VALUES('$exmne_id','$test_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $dbh->query("INSERT INTO test_attempt(student_id,test_id)  VALUES('$exmne_id','$test_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}


}



 
 

 echo json_encode($res);
 ?>


 