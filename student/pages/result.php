<?php
$examId = $_GET['id'];
$selExam = $dbh->query("SELECT * FROM test_tbl WHERE test_id='$examId' ")->fetch(PDO::FETCH_ASSOC);

?>
<style>
    .panel-heading {
        cursor: pointer;
    }

    .panel-title {
        font-weight: bold;
        font-size: 16px;
        margin-left: 1rem;
    }

    .panel-title a {
        color: #db5bb7;
    }

    .panel-body {
        padding: 15px;
    }

    .panel-default>.panel-heading:hover {
        background-color: #e5e5e5;
    }
</style>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div id="refreshData">

            <div class="col-md-12">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div>
                                <?php echo $selExam['test_title']; ?>
                                <div class="page-title-subheading">
                                    <?php echo $selExam['test_description']; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12">
                    <h1 class="text-primary">RESULT'S</h1>
                </div>

                <div class="row col-md-6 float-left">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Your Answer's</h5>
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                <?php
                                $selQuest = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id WHERE eqt.test_id='$examId' AND ea.student_id='$exmneId' AND ea.testans_status='new' ");
                                $i = 1;
                                while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td>
                                            <b>
                                                <p>
                                                    <?php echo $i++; ?> .)
                                                    <?php echo $selQuestRow['test_question']; ?>
                                                </p>
                                            </b>
                                            <label class="pl-4 text-success">
                                                Answer :
                                                <?php
                                                if ($selQuestRow['test_answer'] != $selQuestRow['testans_answer']) { ?>
                                                    <span style="color:red">
                                                        <?php echo $selQuestRow['testans_answer']; ?>
                                                    </span>
                                                <?PHP } else { ?>
                                                    <span class="text-success">
                                                        <?php echo $selQuestRow['testans_answer']; ?>
                                                    </span>
                                                <?php }
                                                ?>
                                            </label>
                                            <label class="pl-4 text-success">
                                                Correct Answer :


                                                <span class="text-success">
                                                    <?php echo $selQuestRow['test_answer']; ?>
                                                </span>


                                            </label>
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#collapse" . $selQuestRow['tqt_id'] ?>">
                                                                See Explain Solution
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="<?php echo "collapse" . $selQuestRow['tqt_id'] ?>" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <?php echo $selQuestRow['test_explain']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 float-left">
                    <div class="col-md-6 float-left">
                        <div class="card mb-3 widget-content bg-night-fade">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">
                                        <h5>Score</h5>
                                    </div>
                                    <div class="widget-numbers text-white">
                                        <?php
                                        $selScore = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id AND eqt.test_answer = ea.testans_answer  WHERE ea.student_id='$exmneId' AND ea.test_id='$examId' AND ea.testans_status='new' ");
                                        ?>
                                        <span>
                                            <?php echo $selScore->rowCount(); ?>
                                            <?php
                                            $over = $selExam['test_questlimit_display'];
                                            ?>
                                        </span> /
                                        <?php echo $over; ?>
                                    </div>
                                </div>
                                <div class="widget-content-right">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 float-left">
                        <div class="card mb-3 widget-content bg-happy-green">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">
                                        <h5>Percentage</h5>
                                    </div>
                                    <div class="widget-numbers text-white">
                                        <?php
                                        $selScore = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id AND eqt.test_answer = ea.testans_answer  WHERE ea.student_id='$exmneId' AND ea.test_id='$examId' AND ea.testans_status='new' ");
                                        ?>
                                        <span>
                                            <?php
                                            $score = $selScore->rowCount();
                                            $ans = $score / $over * 100;
                                            echo number_format($ans, 2);
                                            echo "%";

                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="widget-content-right">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 float-left">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">
                                        <h5>Total marks</h5>
                                    </div>
                                    <div class="widget-numbers text-white">
                                        <span>
                                            <?php
                                            echo $over;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 float-left">
                        <div class="card mb-3 widget-content bg-happy-green">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">
                                        <h5>Your Marks</h5>
                                    </div>
                                    <div class="widget-numbers text-white">
                                        <?php
                                        $selScore = $dbh->query("SELECT * FROM test_question_tbl eqt INNER JOIN test_answers ea ON eqt.tqt_id = ea.quest_id AND eqt.test_answer = ea.testans_answer  WHERE ea.student_id='$exmneId' AND ea.test_id='$examId' AND ea.testans_status='new' ");
                                        ?>
                                        <span>
                                            <?php
                                            $mks = $selScore->rowCount();
                                            $ngmkr = $over - $mks;
                                            echo $mks - ($ngmkr * 0.25);
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="widget-content-right">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>