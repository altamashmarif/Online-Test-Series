<?php 
 include("../../config.php");

 extract($_POST);

 $selCourse = $dbh->query("SELECT * FROM test_tbl WHERE test_title='$examTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($timeLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
 else if($examQuestDipLimit == "" && $examQuestDipLimit == null)
 {
 	$res = array("res" => "noDisplayLimit");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "examTitle" => $examTitle);
 }
 else
 {
    
	$insTest = $dbh->query("INSERT INTO test_tbl(cou_id,test_title,test_time_limit,test_questlimit_display,test_description) VALUES('$courseSelected','$examTitle','$timeLimit','$examQuestDipLimit','$examDesc') ");
	if($insTest)
	{
		$res = array("res" => "success", "examTitle" => $examTitle);
	}
	else
	{
		$res = array("res" => "failed", "examTitle" => $examTitle);
	}


 }
 echo json_encode($res);
 ?>