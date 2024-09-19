<?php 

// Count All Course
$selCourse = $dbh->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);

// Count All Test
$selTest = $dbh->query("SELECT COUNT(test_id) as totTest FROM test_tbl ")->fetch(PDO::FETCH_ASSOC);

// Count All Student
$selStudent = $dbh->query("SELECT COUNT(`student_id`) as totStudent FROM student_tbl ")->fetch(PDO::FETCH_ASSOC);

 ?>