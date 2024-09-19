<?php
include("../../config.php");
print_r($_POST);
$pass = md5($_POST['o_pass']);
$npass = md5($_POST['new_pass']);
$selAcc = $dbh->query("SELECT * FROM tbl_admin WHERE admin_user='admin' AND admin_pass='$pass'  ");

if ($selAcc->rowCount() > 0) {
    $selFill = $dbh->query("UPDATE tbl_admin SET admin_pass= '$npass' WHERE admin_id = 1");
    if($selFill){
        echo "<script>alert('Password Successfully Changed');window.location.href='../home.php?page=chngpass'</script>";
    }
} else {
    echo "<script>alert('Wrong old Password');window.location.href='../home.php?page=chngpass'</script>";
}
?>