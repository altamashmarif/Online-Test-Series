<?php
include("./config.php");
extract($_POST);

$selCourse = $dbh->query("SELECT * FROM student_tbl WHERE student_username ='$username'");

if ($selCourse->rowCount() > 0) { ?>
    <script>
        alert("username already taken.");
        window.location.href = "./index.php";
    </script>
    <?php die();
}


$insStu = $dbh->query(
    "INSERT INTO `student_tbl`(`student_firstname`, `student_lastname`, `student_mobile`, `student_course`, `student_gender`, `student_birthdate`, `student_email`, `student_password`, `student_address`, `student_pincode`, `student_username`, `student_country`) VALUES ('$fname','$lname','$mobile','$course','$gender','$dob','$email','$pwd','$address','$pincode','$username','$country')"
);
if ($insStu) {
    ?>
    <script>
        alert("Welcome To Online Test Series. \n Plz Login To Take Test.");
        window.location.href = "./index.php";
    </script>
    <?php
} else {
    $res = array("res" => "failed", "course_name" => $course_name);
}

?>