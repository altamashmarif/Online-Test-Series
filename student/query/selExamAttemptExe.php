<?php 
 session_start();
 include("../../config.php");
$exmneId = $_SESSION['examineeSession']['exmne_id'];
 

extract($_POST);

 $selExamAttmpt = $dbh->query("SELECT * FROM test_attempt WHERE student_id='$exmneId' AND test_id='$thisId' ");

 if($selExamAttmpt->rowCount() > 0)
 {
 	$res = array("res" => "alreadyExam", "msg" => $thisId);
 }
 else
 {
 	$res = array("res" => "takeNow");
 }


 echo json_encode($res);
 ?>