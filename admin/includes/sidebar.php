<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div style="width: 170px;height: 23px;">
            <h1 style="font-size: 20px;">OTS-Admin Panel</h1>
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"><a href="home.php">Dashboards</a></li>

                <li class="app-sidebar__heading">MANAGE COURSE</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Course
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForAddCourse">
                                <i class="metismenu-icon"></i>
                                Add Course
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-course">
                                <i class="metismenu-icon">
                                </i>Manage Course
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="app-sidebar__heading">MANAGE TEST</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Test
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForTest">
                                <i class="metismenu-icon"></i>
                                Add Test
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-test">
                                <i class="metismenu-icon">
                                </i>Manage Test
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="app-sidebar__heading">REPORTS</li>
                <li>
                    <a href="home.php?page=student-result">
                        <i class="metismenu-icon pe-7s-cup">
                        </i>Student Result
                    </a>
                </li>
                <li>
                    <a href="home.php?page=manage-student">
                        <i class="metismenu-icon pe-7s-cup">
                        </i>Student List
                    </a>
                </li>
                <li class="app-sidebar__heading">
                    Settings
                </li>
                <li>
                    <a href="home.php?page=chngpass">
                        <i class="metismenu-icon pe-7s-settings">
                        </i>Change Password
                    </a>
                </li>
                <li>
                    <a href="query/logoutExe.php">
                        <i class="metismenu-icon pe-7s-user">
                        </i>Logout
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>