<?php 
 include("../../config.php");
 
 extract($_POST);


 $updTest = $dbh->query("UPDATE test_tbl SET cou_id='$courseId', test_title='$examTitle', test_time_limit='$examLimit', test_questlimit_display='$examQuestDipLimit' , test_description='$examDesc' WHERE  test_id='$examId' ");

 if($updTest)
 {
   $res = array("res" => "success", "msg" => $examTitle);
 }
 else
 {
   $res = array("res" => "failed");
 }

 echo json_encode($res);
 ?>