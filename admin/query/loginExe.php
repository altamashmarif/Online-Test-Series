<?php
session_start();
include("../../config.php");

$username = $_POST['username'];
$pass = md5($_POST['pass']);
$selAcc = $dbh->query("SELECT * FROM tbl_admin WHERE admin_user='$username' AND admin_pass='$pass'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if ($selAcc->rowCount() > 0) {
  $_SESSION['admin'] = array(
    'admin_id' => $selAccRow['admin_id'],
    'adminnakalogin' => true
  );
  header("location:../");

} else { ?>
<script>
  alert("Invalid Username or Password.");
  window.location.href = "../";
</script>
<?php } ?>