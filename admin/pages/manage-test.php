<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>MANAGE TEST</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Test List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Test Title</th>
                                <th class="text-left ">Course</th>
                                <th class="text-left ">Description</th>
                                <th class="text-left ">Time limit</th>  
                                <th class="text-left ">Display limit</th>  
                                <th class="text-center" width="20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selTest = $dbh->query("SELECT * FROM test_tbl ORDER BY test_id DESC ");
                                if($selTest->rowCount() > 0)
                                {
                                    while ($selTestRow = $selTest->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selTestRow['test_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selTestRow['cou_id']; 
                                                    $selCourse = $dbh->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selTestRow['test_description']; ?></td>
                                            <td><?php echo $selTestRow['test_time_limit']; ?></td>
                                            <td><?php echo $selTestRow['test_questlimit_display']; ?></td>
                                            <td class="text-center">
                                             <a href="manage-test.php?id=<?php echo $selTestRow['test_id']; ?>" type="button" class="btn btn-primary btn-sm">Manage</a>
                                             <button type="button" id="deleteTest" data-id='<?php echo $selTestRow['test_id']; ?>'  class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Test Found</h3>
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
         
