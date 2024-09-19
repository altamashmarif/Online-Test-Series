<?php
session_start();
include("../../config.php");


extract($_POST);

$selAcc = $dbh->query("SELECT * FROM student_tbl WHERE student_username='$username' AND student_password='$password'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if ($selAcc->rowCount() > 0) {
  $_SESSION['examineeSession'] = array(
    'exmne_id' => $selAccRow['student_id'],
    'examineenakalogin' => true
  );
  header("location:../home.php");

} else { ?>
  <script>
    alert("Invalid username or password");
    window.location.href = "../index.php";
  </script>
<?php }
?>