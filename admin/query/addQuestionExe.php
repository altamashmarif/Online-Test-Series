<?php 
 include("../../config.php");

extract($_POST);

$selQuest = $dbh->query("SELECT * FROM test_question_tbl WHERE test_id='$examId' AND test_question='$question' ");
if($selQuest->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $question);
}
else
{
	$insQuest = $dbh->query("INSERT INTO test_question_tbl(test_id,test_question,test_ch1,test_ch2,test_ch3,test_ch4,test_answer,test_explain) VALUES('$examId','$question','$choice_A','$choice_B','$choice_C','$choice_D','$correctAnswer','$explainAnswer') ");

	if($insQuest)
	{
       $res = array("res" => "success", "msg" => $question);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>