
<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            Colegio SR <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="<?php echo $_SESSION['foto'] ?>" alt="UserIcon">
                <figcaption class="text-center text-titles"><?php echo $_SESSION['nombres'] ?></figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <!-- inicio modal cambio de foto -->
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                    <!-- modal help -->
                    <a href="#" data-toggle="modal" data-target="#exampleModal1">
                        <i class="zmdi zmdi-help"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <?php
        $rol = $_SESSION['rol'];
        if ($rol == "administrador") {
        ?>
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="home.php">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="inicio.php">
                        <i class="glyphicon glyphicon-user"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administration <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="../public/period.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Period</a>
                        </li>
                        <li>
                            <a href="../public/subject.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
                        </li>
                        <li>
                            <a href="../public/section.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
                        </li>
                        <li>
                            <a href="../public/salon.php"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Users <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="../public/admin.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Admin</a>
                        </li>
                        <li>
                            <a href="../public/teacher.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
                        </li>
                        <li>
                            <a href="../public/student.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Student</a>
                        </li>
                        <!--<li>
                            <a href="../public/representative.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Representative</a>
                        </li>-->
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-card zmdi-hc-fw"></i> Payments <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="../public/registration.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
                        </li>
                        <li>
                            <a href="../public/payments.php"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="../public/school.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php
        }
        ?>
    </div>
</section>
<!-- Content page-->
<section class="full-box dashboard-contentPage">
    <!-- nav -->
    <nav class="full-box dashboard-Navbar">
        <ul class="full-box list-unstyled text-right">
            <li class="pull-left">
                <a href="#" class="btn-menu-dashboard"><i class="glyphicon glyphicon-list"></i></a>
            </li>
            <li>
                <a href="#" class="btn-Notifications-area">
                    <i class="zmdi zmdi-notifications-none"></i>
                    <span class="badge">7</span>
                </a>
            </li>
            <li>
                <a href="#" class="btn-modal-help">
                    <i class="glyphicon glyphicon-log-out"></i>
                </a>
            </li>
        </ul>
    </nav>