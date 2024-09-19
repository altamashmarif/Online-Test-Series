<?php
session_start();
if (isset($_SESSION['examineeSession']['examineenakalogin']) == true){
    header("location:home.php");
}
else{
    header("location:../");
}

?>