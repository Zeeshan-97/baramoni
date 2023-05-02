<nav class="navbar navbar-expand navbar-light navbar-bg">
    <!-- <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a> -->
    <div class="search-wrapper">
        <form action="">
            <div class="form-group">
                <input type="search" placeholder="Search here" class="form-control">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <!-- <a class="nav-icon dropdown-toggle d-inline-block d-sm-none " href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a> -->

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block profile" href="#" data-bs-toggle="dropdown">
                    <!-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
                                alt="Charles Hall" /> <span class="text-dark">Charles Hall</span> -->
                    <img src="img/profile.png" alt=""> John Doe
                    <i class="fa fa-angle-down " aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                        Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-icon btn" href="../index.php" id="alertsDropdown" target="_blank">
                    Back to Homepage
                </a>
            </li>
        </ul>
    </div>
</nav>