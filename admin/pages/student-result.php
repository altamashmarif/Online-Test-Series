<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>STUDENT RESULT</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Student Result
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover text-nowrap" id="tableList">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Test Name</th>
                                <th>Scores</th>
                                <th>Ratings</th>
                                <!-- <th width="10%"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $dbh->query("SELECT * FROM student_tbl et INNER JOIN test_attempt ea ON et.student_id = ea.student_id ORDER BY ea.testat_id DESC ");
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td>
                                            <?php
                                            $fname = $selExmneRow['student_firstname'] . " " . $selExmneRow['student_lastname'];
                                            echo $fname;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $eid = $selExmneRow['student_id'];
                                            $selExName = $dbh->query("SELECT * FROM test_tbl et INNER JOIN test_attempt ea ON et.test_id=ea.test_id WHERE  ea.student_id='$eid' ")->fetch(PDO::FETCH_ASSOC);
                                            $test_id = $selExName['test_id'];
                                            echo $selExName['test_title'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $selScore = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id AND eqt.test_answer = ea.testans_answer  WHERE ea.student_id='$eid' AND ea.test_id='$test_id' AND ea.testans_status='new' ");
                                            ?>
                                            <span>
                                                <?php echo $selScore->rowCount(); ?>
                                                <?php
                                                $over = $selExName['test_questlimit_display'];
                                                ?>
                                            </span> /
                                            <?php echo $over; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $selScore = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id AND eqt.test_answer = ea.testans_answer  WHERE ea.student_id='$eid' AND ea.test_id='$test_id' AND ea.testans_status='new' ");
                                            ?>
                                            <span>
                                                <?php
                                                $score = $selScore->rowCount();
                                                $ans = $score / $over * 100;
                                                echo number_format($ans, 2);
                                                // echo "$ans";
                                                echo "%";

                                                ?>
                                            </span>
                                        </td>
                                        <!-- <td>
                                               <a rel="facebox" href="facebox_modal/updateStudent.php?id=<?php echo $selExmneRow['student_id']; ?>" class="btn btn-sm btn-primary">Print Result</a>

                                           </td> -->
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="4">
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


    </div>