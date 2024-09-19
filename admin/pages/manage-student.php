<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>All STUDENT</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Student List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover text-nowrap"
                        id="tableList">
                        <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Mobile</td>
                                <td>Gender</td>
                                <td>Birthdate</td>
                                <td>Email</td>
                                <td>Course</td>
                                <td>Country</td>
                                <td>Username</td>
                                <td>Pincode</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $dbh->query("SELECT * FROM student_tbl ORDER BY student_id DESC ");
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $selExmneRow['student_firstname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_lastname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_mobile']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_gender']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_birthdate']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_email']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $exmneCourse = $selExmneRow['student_course'];
                                            $selCourse = $dbh->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                            echo $selCourse['cou_name'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_country']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selExmneRow['student_pincode']; ?>
                                        </td>
                                        <!-- <td>
                                               <a rel="facebox" href="facebox_modal/updateStudent.php?id=<?php //echo $selExmneRow['student_id']; ?>" class="btn btn-sm btn-primary">Update</a>

                                           </td> -->
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="8">
                                        <h3 class="p-1 text-center">No Course Found</h3>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    