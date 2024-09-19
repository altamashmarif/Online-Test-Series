<?php
$exmneId = $_SESSION['examineeSession']['exmne_id'];

// Select Data sa nilogin nga examinee
$selExmneeData = $dbh->query("SELECT * FROM student_tbl WHERE student_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse = $selExmneeData['student_course'];



// Select and tanang exam depende sa course nga ni login 
$selExam = $dbh->query("SELECT * FROM test_tbl WHERE cou_id='$exmneCourse' ORDER BY test_id DESC ");


//

?>