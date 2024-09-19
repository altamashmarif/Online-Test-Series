<?php 
session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>

<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>



<!-- Condition If unza nga page gi click -->
<?php 
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "add-course")
     {
     include("pages/add-course.php");
     }
     else if($page == "manage-course")
     {
     	include("pages/manage-course.php");
     }
     else if($page == "manage-test")
     {
      include("pages/manage-test.php");
     }
     else if($page == "manage-student")
     {
      include("pages/manage-student.php");
     }
     else if($page == "student-result")
     {
      include("pages/student-result.php");
     }
     else if($page == "chngpass")
     {
      include("pages/chngpass.php");
     }

       
   }
   // Else ang home nga page mo display
   else
   {
     include("pages/home.php"); 
   }


 ?> 


<!-- MAO NI IYA FOOTER -->
<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>
