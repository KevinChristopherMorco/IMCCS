<style>
    .navbar {
        display: none;
    }




    input.student-update:disabled {
        background-color: #F8F8F8;
    }

    input.student-update:focus {
        box-shadow: none;
        border-bottom: 3px solid #800000;
    }

    a.nav-link.student-update {
        color: gray;
        text-decoration: none;
    }

    span {
        text-decoration: none;
    }

    a.nav-link.student-update {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Nunito", sans-serif;
    }

    /*--------------------------------------------------------------
# Main
--------------------------------------------------------------*/
    #main {
        margin-top: 60px;
        padding: 20px 30px;
        transition: all 0.3s;
    }

    @media (max-width: 1199px) {
        #main {
            padding: 20px;
        }
    }

    /*--------------------------------------------------------------
# Page Title
--------------------------------------------------------------*/
    .pagetitle {
        margin-bottom: 10px;
    }

    .pagetitle h1 {
        font-size: 24px;
        margin-bottom: 0;
        font-weight: 600;
        color: #012970;
    }

    /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
    .back-to-top {
        position: fixed;
        visibility: hidden;
        opacity: 0;
        right: 15px;
        bottom: 15px;
        z-index: 99999;
        background: #4154f1;
        width: 40px;
        height: 40px;
        border-radius: 4px;
        transition: all 0.4s;
    }

    .back-to-top i {
        font-size: 24px;
        color: #fff;
        line-height: 0;
    }

    .back-to-top:hover {
        background: #6776f4;
        color: #fff;
    }

    .back-to-top.active {
        visibility: visible;
        opacity: 1;
    }

    /*--------------------------------------------------------------
# Override some default Bootstrap stylings
--------------------------------------------------------------*/
    /* Dropdown menus */
    .dropdown-menu {
        border-radius: 4px;
        padding: 10px 0;
        -webkit-animation-name: dropdown-animate;
        animation-name: dropdown-animate;
        -webkit-animation-duration: 0.2s;
        animation-duration: 0.2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        border: 0;
        box-shadow: 0 5px 30px 0 rgba(82, 63, 105, 0.2);
    }

    .dropdown-menu .dropdown-header,
    .dropdown-menu .dropdown-footer {
        text-align: center;
        font-size: 15px;
        padding: 10px 25px;
    }

    .dropdown-menu .dropdown-footer a {
        color: #444444;
        text-decoration: underline;
    }

    .dropdown-menu .dropdown-footer a:hover {
        text-decoration: none;
    }

    .dropdown-menu .dropdown-divider {
        color: #a5c5fe;
        margin: 0;
    }

    .dropdown-menu .dropdown-item {
        font-size: 14px;
        padding: 10px 15px;
        transition: 0.3s;
    }

    .dropdown-menu .dropdown-item i {
        margin-right: 10px;
        font-size: 18px;
        line-height: 0;
    }

    .dropdown-menu .sign-out {
        color: red;
    }


    .dropdown-menu .dropdown-item:hover {
        background-color: #f6f9ff;
    }

    @media (min-width: 768px) {
        .dropdown-menu-arrow::before {
            content: "";
            width: 13px;
            height: 13px;
            background: #fff;
            position: absolute;
            top: -7px;
            right: 20px;
            transform: rotate(45deg);
            border-top: 1px solid #eaedf1;
            border-left: 1px solid #eaedf1;
        }
    }

    @-webkit-keyframes dropdown-animate {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }

        0% {
            opacity: 0;
        }
    }

    @keyframes dropdown-animate {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }

        0% {
            opacity: 0;
        }
    }

    /* Light Backgrounds */
    .bg-primary-light {
        background-color: #cfe2ff;
        border-color: #cfe2ff;
    }

    .bg-secondary-light {
        background-color: #e2e3e5;
        border-color: #e2e3e5;
    }

    .bg-success-light {
        background-color: #d1e7dd;
        border-color: #d1e7dd;
    }

    .bg-danger-light {
        background-color: #f8d7da;
        border-color: #f8d7da;
    }

    .bg-warning-light {
        background-color: #fff3cd;
        border-color: #fff3cd;
    }

    .bg-info-light {
        background-color: #cff4fc;
        border-color: #cff4fc;
    }

    .bg-dark-light {
        background-color: #d3d3d4;
        border-color: #d3d3d4;
    }

    /* Card */
    .card {
        margin-bottom: 30px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    }

    .card-header,
    .card-footer {
        border-color: #ebeef4;
        background-color: #fff;
        color: #798eb3;
        padding: 15px;
    }

    .card-title {
        padding: 20px 0 15px 0;
        font-size: 18px;
        font-weight: 500;
        color: #012970;
        font-family: "Poppins", sans-serif;
    }

    .card-title span {
        color: #899bbd;
        font-size: 14px;
        font-weight: 400;
    }

    .card-body {
        padding: 0 20px 20px 20px;
    }

    .card-img-overlay {
        background-color: rgba(255, 255, 255, 0.6);
    }

    /* Alerts */
    .alert-heading {
        font-weight: 500;
        font-family: "Poppins", sans-serif;
        font-size: 20px;
    }

    /* Close Button */
    .btn-close {
        background-size: 25%;
    }

    .btn-close:focus {
        outline: 0;
        box-shadow: none;
    }

    /* Accordion */
    .accordion-item {
        border: 1px solid #ebeef4;
    }

    .accordion-button:focus {
        outline: 0;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        color: var(--sidebar--header--navlink-color);
        background-color: #f6f9ff;
    }

    .accordion-flush .accordion-button {
        padding: 15px 0;
        background: none;
        border: 0;
    }

    .accordion-flush .accordion-button:not(.collapsed) {
        box-shadow: none;
        color: #4154f1;
    }

    .accordion-flush .accordion-body {
        padding: 0 0 15px 0;
        color: #3e4f6f;
        font-size: 15px;
    }

    /* Breadcrumbs */
    .breadcrumb {
        font-size: 14px;
        font-family: "Nunito", sans-serif;
        color: #899bbd;
        font-weight: 600;
    }

    .breadcrumb a {
        color: #899bbd;
        transition: 0.3s;
    }

    .breadcrumb a:hover {
        color: #51678f;
    }

    .breadcrumb .breadcrumb-item::before {
        color: #899bbd;
    }

    .breadcrumb .active {
        color: #51678f;
        font-weight: 600;
    }

    /* Bordered Tabs */
    .nav-tabs-bordered {
        border-bottom: 2px solid #ebeef4;
    }

    .nav-tabs-bordered .nav-link {
        margin-bottom: -2px;
        border: none;
        color: #2c384e;
    }

    .nav-tabs-bordered .nav-link:hover,
    .nav-tabs-bordered .nav-link:focus {
        color: #4154f1;
    }

    .nav-tabs-bordered .nav-link.active {
        background-color: #fff;
        color: red;
        border-bottom: 2px solid #4154f1;
    }

    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    .logo {
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .logo {
            width: 280px;
        }
    }

    .logo img {
        max-height: 50px;
        margin-right: 6px;
    }

    .logo span {
        font-size: 26px;
        font-weight: 700;
        color: black;
        font-family: "Nunito", sans-serif;
    }

    .header {
        transition: all 0.5s;
        z-index: 997;
        height: 60px;
        box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
        background-color: white;
        padding-left: 20px;
        /* Toggle Sidebar Button */
        /* Search Bar */
    }

    .header .toggle-sidebar-btn {
        font-size: 32px;
        padding-left: 10px;
        cursor: pointer;
        color: white;
    }

    .header .search-bar {
        min-width: 360px;
        padding: 0 20px;
    }

    @media (max-width: 1199px) {
        .header .search-bar {
            position: fixed;
            top: 50px;
            left: 0;
            right: 0;
            padding: 20px;
            box-shadow: 0px 0px 15px 0px rgba(1, 41, 112, 0.1);
            background: white;
            z-index: 9999;
            transition: 0.3s;
            visibility: hidden;
            opacity: 0;
        }

        .header .search-bar-show {
            top: 60px;
            visibility: visible;
            opacity: 1;
        }
    }

    .header .search-form {
        width: 100%;
    }

    .header .search-form input {
        border: 0;
        font-size: 14px;
        color: #012970;
        border: 1px solid rgba(1, 41, 112, 0.2);
        padding: 7px 38px 7px 8px;
        border-radius: 3px;
        transition: 0.3s;
        width: 100%;
    }

    .header .search-form input:focus,
    .header .search-form input:hover {
        outline: none;
        box-shadow: 0 0 10px 0 rgba(1, 41, 112, 0.15);
        border: 1px solid rgba(1, 41, 112, 0.3);
    }

    .header .search-form button {
        border: 0;
        padding: 0;
        margin-left: -30px;
        background: none;
    }

    .header .search-form button i {
        color: #012970;
    }

    /*--------------------------------------------------------------
# Header Nav
--------------------------------------------------------------*/


    .header-nav .nav-icon {
        font-size: 22px;
        color: #800000;
        margin-right: 25px;
        position: relative;
    }

    .header-nav .nav-profile {
        color: black;
    }

    .header-nav .nav-profile img {
        max-height: 36px;
    }

    .header-nav .nav-profile span {
        font-size: 14px;
        font-weight: 600;
    }

    .header-nav .badge-number {
        position: absolute;
        inset: -2px -5px auto auto;
        font-weight: normal;
        font-size: 12px;
        padding: 3px 6px;
    }


    .header-nav .profile .dropdown-header h6 {
        font-size: 18px;
        margin-bottom: 0;
        font-weight: 600;
        color: #444444;
    }

    .header-nav .profile .dropdown-header span {
        font-size: 14px;
    }

    .header-nav .profile .dropdown-item {
        font-size: 14px;
        padding: 10px 15px;
        transition: 0.3s;
    }

    .header-nav .profile .dropdown-item i {
        margin-right: 10px;
        font-size: 18px;
        line-height: 0;
    }

    .header-nav .profile .dropdown-item:hover {
        background-color: #f6f9ff;
    }

    .navbar-toggler .toggler-icon {
        width: 30px;
        height: 2px;
        background-color: #000;
        display: block;
        margin: 5px 0;
        position: relative;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
    }

    .navbar-collapse {
        position: absolute;
        top: 100%;
        right: 0;
        max-width: 300px;
        width: 100%;
        background-color: var(--white);
        z-index: 9;
        -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
        padding: 0px;
        display: none;
        border-radius: 5px;
    }

    .navbar-collapse.show {
        display: block;
    }

    header .navbar-item {
        padding: 5px 5px 5px 5px !important;
        margin-left: 5px;
    }

    @media only screen and (min-width: 1000px) and (max-width: 4000px) {
        .header .navbar-toggler {
            display: none;

        }
    }


    /*--------------------------------------------------------------
# Sidebar
--------------------------------------------------------------*/
    .sidebar {
        position: fixed;
        top: 60px;
        left: 0;
        bottom: 0;
        width: 300px;
        z-index: 996;
        transition: all 0.3s;
        padding: 20px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #aab7cf transparent;
        box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
        background-color: var(--sidebar--header-color);
    }

    @media (max-width: 1199px) {
        .sidebar {
            left: -300px;
        }
    }

    .sidebar::-webkit-scrollbar {
        width: 5px;
        height: 8px;
        background-color: #fff;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background-color: #aab7cf;
    }

    @media (min-width: 1200px) {

        #main,
        #footer {
            margin-left: 300px;
        }
    }

    @media (max-width: 1199px) {
        .toggle-sidebar .sidebar {
            left: 0;
        }
    }

    @media (min-width: 1200px) {

        .toggle-sidebar #main,
        .toggle-sidebar #footer {
            margin-left: 0;
        }

        .toggle-sidebar .sidebar {
            left: -300px;
        }
    }

    .sidebar-nav {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .sidebar-nav li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .sidebar-nav .nav-item {
        margin-bottom: 5px;
    }

    .sidebar-nav .nav-heading {
        font-size: 11px;
        text-transform: uppercase;
        color: var(--white);
        font-weight: 600;
        margin: 10px 0 5px 15px;
    }

    .sidebar-nav .nav-link {
        display: flex;
        align-items: center;
        font-size: 15px;
        font-weight: 600;
        color: var(--sidebar--header--navlink-color);
        transition: 0.3;
        padding: 10px 15px;
        border-radius: 4px;
    }

    .sidebar-nav .nav-link i {
        font-size: 16px;
        margin-right: 10px;
        color: var(--sidebar--header--navlink-color);
    }



    .sidebar-nav .nav-link .bi-chevron-down {
        margin-right: 0;
        transition: transform 0.2s ease-in-out;
    }

    .sidebar-nav .nav-link:not(.collapsed) .bi-chevron-down {
        transform: rotate(180deg);
    }

    .sidebar-nav .nav-content {
        padding: 5px 0 0 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
    }

    .sidebar-nav .nav-content a {
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        color: var(--sidebar--header--navlink-color);
        transition: 0.3;
        padding: 10px 0 10px 40px;
        transition: 0.3s;
    }

    .sidebar-nav .nav-content a i {
        font-size: 15px;
        margin-right: 8px;
        line-height: 0;
        border-radius: 50%;
    }

    .sidebar-nav a.active {
        transition-timing-function: ease-in-out;
        transition: 0.5s;
        border-radius: 15px;
        background-color: #800000;
        font-weight: bolder;
        color: #fff;
        box-shadow: 0 4px 4px #000;
        -moz-box-shadow: 0 4px 4px #000;
        -webkit-box-shadow: 0 4px 4px #000;
    }

    .sidebar-nav .nav-content a:hover,
    .sidebar-nav .nav-content a.active {
        color: var(--sidebar--header--navlink-color);
    }

    .sidebar-nav .nav-content a.active i {
        background-color: var(--sidebar--header--navlink-color);
    }
</style>

<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="home-student.php?page=user-browse-topics" class="logo d-flex align-items-center">
            <img src="assets/images/website-main-logo/IMCCS-black.png" alt="">
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">

        <ul class="d-flex align-items-center">
            <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
            </button>

            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="ud-menu" href="home-student.php?page=user-update-profile-password&subpage=personal-info" data-id="<?php echo $_SESSION['user_id'] ?>">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="ud-menu" href="home-student.php?page=user-update-profile-password&subpage=change-password">Change Password</a>
                    </li>

                    <div class="user-btn">
                        <h5 class="mt-4 mb-2"><i class="fa-solid fa-circle-user"></i>
                            <?php echo $_SESSION["username"] ?></h5>
                        <li class="nav-item">
                            <a href="home-student.php?page=user-update-profile-password&subpage=personal-info" class="btn-custom-secondary sign-in login-btn">
                                <i class="fa-solid fa-gear"></i>
                                Account Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" id="sign-in" class="btn-custom-secondary signout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Sign Out
                            </a>
                        </li>
                    </div>
                </ul>

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $_SESSION["username"] ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo  $_SESSION["username"] ?></h6>
                            <span><?php echo  $_SESSION["usertype"] ?></span>
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="fa-solid fa-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center sign-out" href="logout.php">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </div>
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link student-update" href="home-student.php?page=user-update-profile-password&subpage=personal-info" data-id="<?php echo $_SESSION['user_id'] ?>">
                <i class="fa-solid fa-id-card"></i>
                <span>Personal Information</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link student-update" href="home-student.php?page=user-update-profile-password&subpage=change-password">
                <i class="fa-solid fa-lock"></i>
                <span>Change Password</span>
            </a>
        </li><!-- End Dashboard Nav -->
    </ul>

</aside><!-- End Sidebar-->

<script>
    //===== close navbar-collapse when a  clicked


    $(document).ready(function() {
        let navbarToggler = document.querySelector(".navbar-toggler");
        const navbarCollapse = document.querySelector(".navbar-collapse");
        $('.navbar-toggler').on("click", function() {
            $(this).toggleClass('active')
            $('.navbar-collapse').toggle();
        })


    })
</script>