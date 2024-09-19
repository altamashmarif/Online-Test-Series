<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="login">
                        <form action="./streg.php" method="post">
                            <h3 class="text-center">Student Registration Form</h3>
                            <div class="login-left">
                                <input type="text" name="fname" placeholder="First Name" required>
                                <select name="gender" id="gender" required style="margin-top: 20px;">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <input type="text" name="mobile" placeholder="Mobile No" required>
                                <input type="text" name="address" placeholder="Address" required>
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" required>
                                <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="login-right">
                                <input type="text" name="lname" placeholder="Last Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="text" name="pincode" placeholder="Pin Code" required>
                                <select name="country" id="country" required style="margin-top: 20px;">
                                    <option value="">Select Country</option>
                                    <option value="india">India</option>
                                    <option value="usa">Usa</option>
                                    <option value="canada">Canada</option>
                                </select>
                                <select name="course" id="course" required>
                                    <option value="">Select course</option>
                                    <?php
                                    $selCourse = $dbh->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                                    <?php }
                                    ?>
                                </select>
                                <input type="password" name="pwd" placeholder="Password" required>
                                <input type="submit" name="submit" id="submit" value="CREATE ACCOUNT">
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-left">
                            <img src="./images/pexels-photo-733857.webp" alt="" srcset="" style="width: 100%;">
                        </div>
                        <div class="login-right">
                            <form method="post" action="student/query/loginExe.php">
                                <h3>Signin with your account </h3>
                                <input type="text" name="username" id="username" placeholder="Enter your Username" required="">
                                <input type="password" name="password" id="password" placeholder="Password" value=""
                                    required="">


                                <input type="submit" name="signin" value="SIGNIN">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>