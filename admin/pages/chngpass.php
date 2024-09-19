<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>MANAGE PASSWORD</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Change Password Form </div>
                <div class="card-body">
                    <form id="chng_pass" class="" method="post" action="query/chng_pass.php">
                        <div class="position-relative row form-group"><label for="o_pass"
                                class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                                <input name="o_pass" id="o_pass" placeholder="Enter Your Old Password" type="text" class="form-control" autocomplete="off" required>
                                </div>
                        </div>
                        <div class="position-relative row form-group"><label for="new_pass"
                                class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10"><input name="new_pass" id="new_pass"
                                    placeholder="Enter Your New Password" type="password" class="form-control" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="cp_pass"
                                class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10"><input name="cp_pass" id="cp_pass"
                                    placeholder="Confirm New Password" type="password" class="form-control" required></div>
                        </div>

                        <div class="position-relative row">
                            <div class="col-auto ml-auto">
                                <button class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>