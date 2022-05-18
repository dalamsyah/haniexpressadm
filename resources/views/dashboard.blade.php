<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->

    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism.css">
    <link rel="stylesheet" href="assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css">
    <link rel="stylesheet" href="assets/libs/prismjs/plugins/toolbar/prism-toolbar.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/libs/dropzone/dist/dropzone.css" >
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">






    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
<div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
        <div class="nav-scroller">
            <!-- Brand logo -->
            <a class="navbar-brand" href="./index.html">
                <img src="assets/images/brand/logo/logo.svg" alt="" />
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow  active " href="./index.html">
                        <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                    </a>

                </li>


                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Layouts & Pages</div>
                </li>


                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                        <i
                            data-feather="layers"

                            class="nav-icon icon-xs me-2">
                        </i> Pages
                    </a>

                    <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="./pages/profile.html">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow   "  href="./pages/settings.html" >
                                    Settings
                                </a>

                            </li>


                            <li class="nav-item">
                                <a class="nav-link " href="./pages/billing.html">
                                    Billing
                                </a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link " href="./pages/pricing.html">
                                    Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./pages/404-error.html">
                                    404 Error
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>


                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                        <i data-feather="lock" class="nav-icon icon-xs me-2">
                        </i> Authentication
                    </a>
                    <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="./pages/sign-in.html"> Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="./pages/sign-up.html"> Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./pages/forget-password.html">
                                    Forget Password
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/layout.html">
                        <i
                            data-feather="sidebar"

                            class="nav-icon icon-xs me-2"
                        >
                        </i
                        >
                        Layouts
                    </a>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">UI Components</div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                        <i data-feather="database" class="nav-icon icon-xs me-2" >
                        </i> Components
                    </a>
                    <div id="navComponents" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="./components/accordions.html" aria-expanded="false">
                                    Accordions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/alerts.html" aria-expanded="false">
                                    Alerts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/badge.html" aria-expanded="false">
                                    Badge
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/breadcrumb.html" aria-expanded="false">
                                    Breadcrumb
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/button.html" aria-expanded="false">
                                    Button
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="./components/button-group.html" aria-expanded="false">
                                    Button group
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/card.html" aria-expanded="false">
                                    Card
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/carousel.html" aria-expanded="false">
                                    Carousel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/collapse.html" aria-expanded="false">
                                    Collapse
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/dropdowns.html" aria-expanded="false">
                                    Dropdowns
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/forms.html" aria-expanded="false">
                                    Forms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/input-group.html" aria-expanded="false">
                                    Input group
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/list-group.html" aria-expanded="false">
                                    List group
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="./components/modal.html" aria-expanded="false">
                                    Modal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/navs.html" aria-expanded="false">
                                    Navs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/navbar.html" aria-expanded="false">
                                    Navbar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/offcanvas.html" aria-expanded="false">
                                    Offcanvas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/pagination.html" aria-expanded="false">
                                    Pagination
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/popovers.html" aria-expanded="false">
                                    Popovers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/progress.html" aria-expanded="false">
                                    Progress
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./components/scrollspy.html" aria-expanded="false">
                                    Scrollspy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/spinners.html" aria-expanded="false">
                                    Spinners
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/toasts.html" aria-expanded="false">
                                    Toasts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/tooltips.html" aria-expanded="false">
                                    Tooltips
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/tables.html">
                        <i


                            class="nav-icon icon-xs me-2 bi bi-table"
                        >
                        </i
                        >
                        Tables
                    </a>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navUtilities" aria-expanded="false" aria-controls="navUtilities">
                        <i data-feather="database" class="nav-icon icon-xs me-2" >
                        </i> Utilities
                    </a>
                    <div id="navUtilities" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="./components/typography.html" aria-expanded="false">
                                    Typography
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/borders.html" aria-expanded="false">
                                    Borders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/colors.html" aria-expanded="false">
                                    Colors
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./components/shadows.html" aria-expanded="false">
                                    Shadows
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                        <i
                            data-feather="corner-left-down"

                            class="nav-icon icon-xs me-2"
                        >
                        </i
                        > Menu Level
                    </a>
                    <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="#!">  NavItem 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#!">  NavItem 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                NavItem 1
                                            </a>
                                            <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#!">
                                                            NavChild Item 1
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#!">  Nav Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Documentation</div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="./docs/index.html" >
                        <i data-feather="clipboard" class="nav-icon icon-xs me-2" >
                        </i>  Docs
                    </a>
                </li>




            </ul>

        </div>
    </nav>
    <!-- Page content -->
    <div id="page-content">
        <div class="header @@classList">
            <!-- navbar -->
            <nav class="navbar-classic navbar navbar-expand-lg">
                <a id="nav-toggle" href="#"><i
                        data-feather="menu"

                        class="nav-icon me-2 icon-xs"></i></a>
                <div class="ms-lg-3 d-none d-md-none d-lg-block">
                    <!-- Form -->
                    <form class="d-flex align-items-center">
                        <input type="search" class="form-control" placeholder="Search" />
                    </form>
                </div>
                <!--Navbar nav -->
                <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                    <li class="dropdown stopevent">
                        <a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted" href="#" role="button"
                           id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="icon-xs" data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                             aria-labelledby="dropdownNotification">
                            <div class="">
                                <div class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
                                    <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                    <a href="#" class="text-muted">
                <span>
                  <i class="me-1 icon-xxs" data-feather="settings"></i>
                </span>
                                    </a>
                                </div>
                                <!-- List group -->
                                <ul class="list-group list-group-flush notification-list-scroll">
                                    <!-- List group item -->
                                    <li class="list-group-item bg-light">


                                        <a href="#" class="text-muted">
                                            <h5 class="fw-bold mb-1">Rishi Chopra</h5>
                                            <p class="mb-0">
                                                Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                            </p>
                                        </a>



                                    </li>
                                    <!-- List group item -->
                                    <li class="list-group-item">


                                        <a href="#" class="text-muted">
                                            <h5 class="fw-bold mb-1">Neha Kannned</h5>
                                            <p class="mb-0">
                                                Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                                            </p>
                                        </a>



                                    </li>
                                    <!-- List group item -->
                                    <li class="list-group-item">


                                        <a href="#" class="text-muted">
                                            <h5 class="fw-bold mb-1">Nirmala Chauhan</h5>
                                            <p class="mb-0">
                                                Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                                            </p>
                                        </a>



                                    </li>
                                    <!-- List group item -->
                                    <li class="list-group-item">


                                        <a href="#" class="text-muted">
                                            <h5 class="fw-bold mb-1">Sina Ray</h5>
                                            <p class="mb-0">
                                                Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
                                            </p>
                                        </a>



                                    </li>
                                </ul>
                                <div class="border-top px-3 py-2 text-center">
                                    <a href="#" class="text-inherit fw-semi-bold">
                                        View all Notifications
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- List -->
                    <li class="dropdown ms-2">
                        <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                     class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end"
                             aria-labelledby="dropdownUser">
                            <div class="px-4 pb-0 pt-2">


                                <div class="lh-1 ">
                                    <h5 class="mb-1"> John E. Grainger</h5>
                                    <a href="#" class="text-inherit fs-6">View my profile</a>
                                </div>
                                <div class=" dropdown-divider mt-3 mb-2"></div>
                            </div>

                            <ul class="list-unstyled">

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                       href="#">
                                        <i class="me-2 icon-xxs dropdown-item-icon"
                                           data-feather="activity"></i>Activity Log
                                    </a>


                                </li>

                                <li>
                                    <a class="dropdown-item text-primary" href="#">
                                        <i class="me-2 icon-xxs text-primary dropdown-item-icon"
                                           data-feather="star"></i>Go Pro
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="me-2 icon-xxs dropdown-item-icon"
                                           data-feather="settings"></i>Account Settings
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./index.html">
                                        <i class="me-2 icon-xxs dropdown-item-icon"
                                           data-feather="power"></i>Sign Out
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-white">Projects</h3>
                            </div>
                            <div>
                                <a href="#" class="btn btn-white">Create New Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Projects</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                    <i class="bi bi-briefcase fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">18</h1>
                                <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Active Task</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                    <i class="bi bi-list-task fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">132</h1>
                                <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Teams</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">12</h1>
                                <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Productivity</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">76%</h1>
                                <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Active Projects</h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>Project name</th>
                                    <th>Hours</th>
                                    <th>priority</th>
                                    <th>Members</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-middle"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4
                                rounded-1">
                                                    <img
                                                        src="assets/images/brand/dropbox-logo.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">Dropbox Design
                                                        System</a></h5>

                                            </div>
                                        </div></td>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span class="badge
                            badge-warning">Medium</span></td>
                                    <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-1.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-2.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-3.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark"><div
                                            class="float-start me-3">15%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width:15%" aria-valuenow="15"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4
                                rounded-1">
                                                    <img src="assets/images/brand/slack-logo.svg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">Slack Team UI Design</a></h5>
                                            </div>
                                        </div></td>
                                    <td class="align-middle">47</td>
                                    <td class="align-middle"><span class="badge
                            badge-danger">High</span></td>
                                    <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-4.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-5.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-6.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark"><div
                                            class="float-start me-3">35%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width:35%" aria-valuenow="35"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4
                                rounded-1">
                                                    <img
                                                        src="assets/images/brand/github-logo.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">GitHub Satellite</a></h5>
                                            </div>
                                        </div></td>
                                    <td class="align-middle">120</td>
                                    <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                    <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-7.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-8.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-9.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark"><div
                                            class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width:75%" aria-valuenow="75"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4
                                rounded-1">
                                                    <img
                                                        src="assets/images/brand/3dsmax-logo.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">3D Character Modelling</a></h5>
                                            </div>
                                        </div></td>
                                    <td class="align-middle">89</td>
                                    <td class="align-middle"><span class="badge
                            badge-warning">Medium</span></td>
                                    <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-10.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-11.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-12.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark"><div
                                            class="float-start me-3">63%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width:63%" aria-valuenow="63"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded
                                bg-primary">
                                                    <img
                                                        src="assets/images/brand/layers-logo.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">Webapp Design System</a>
                                                </h5>
                                            </div>
                                        </div></td>
                                    <td class="align-middle">108</td>
                                    <td class="align-middle"><span class="badge
                            badge-success">Track</span></td>
                                    <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-13.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-14.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-15.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark"><div
                                            class="float-start me-3">100%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success"
                                                     role="progressbar" style="width:100%"
                                                     aria-valuenow="100" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0"><div class="d-flex
                            align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img
                                                        src="assets/images/brand/github-logo.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1"> <a href="#"
                                                                             class="text-inherit">Github Event Design</a>
                                                </h5>

                                            </div>
                                        </div></td>
                                    <td class="align-middle border-bottom-0">120</td>
                                    <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                                    <td class="align-middle border-bottom-0"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-13.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-14.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm">
                              <img alt="avatar"
                                   src="assets/images/avatar/avatar-15.jpg"
                                   class="rounded-circle">
                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                            </span>
                                        </div></td>
                                    <td class="align-middle text-dark border-bottom-0"><div
                                            class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width:75%" aria-valuenow="75"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- card footer  -->
                        <div class="card-footer bg-white text-center">
                            <a href="#">View All Projects</a>

                        </div>
                    </div>

                </div>
            </div>
            <!-- row  -->
            <div class="row my-6">
                <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                    <!-- card  -->
                    <div class="card h-100">
                        <!-- card body  -->
                        <div class="card-body">
                            <div class="d-flex align-items-center
                    justify-content-between">
                                <div>
                                    <h4 class="mb-0">Tasks Performance </h4>
                                </div>
                                <!-- dropdown  -->
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                       role="button" id="dropdownTask" data-bs-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- chart  -->
                            <div class="mb-8">
                                <div id="perfomanceChart"></div>
                            </div>
                            <!-- icon with content  -->
                            <div class="d-flex align-items-center justify-content-around">
                                <div class="text-center">
                                    <i class="icon-sm text-success"
                                       data-feather="check-circle"></i>
                                    <h1 class="mt-3 fw-bold mb-1">76%</h1>
                                    <p>Completed</p>
                                </div>
                                <div class="text-center">
                                    <i class="icon-sm text-warning"
                                       data-feather="trending-up"></i>
                                    <h1 class="mt-3 fw-bold mb-1">32%</h1>
                                    <p>In-Progress</p>
                                </div>
                                <div class="text-center">
                                    <i class="icon-sm text-danger"
                                       data-feather="trending-down"></i>
                                    <h1 class="mt-3 fw-bold mb-1">13%</h1>
                                    <p>Behind</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card  -->
                <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="card h-100">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Teams </h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Last Activity</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="assets/images/avatar/avatar-2.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Anita Parmar</h5>
                                                <p class="mb-0">anita@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Front End Developer</td>
                                    <td class="align-middle">3 May, 2021</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamOne"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="assets/images/avatar/avatar-1.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Jitu Chauhan</h5>
                                                <p class="mb-0">jituchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Project Director </td>
                                    <td class="align-middle">Today</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamTwo"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamTwo">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="assets/images/avatar/avatar-3.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Sandeep Chauhan</h5>
                                                <p class="mb-0">sandeepchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Full- Stack Developer</td>
                                    <td class="align-middle">Yesterday</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamThree"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamThree">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="assets/images/avatar/avatar-4.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Amanda Darnell</h5>
                                                <p class="mb-0">amandadarnell@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Digital Marketer</td>
                                    <td class="align-middle">3 May, 2021</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamFour"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamFour">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="assets/images/avatar/avatar-5.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Patricia Murrill</h5>
                                                <p class="mb-0">patriciamurrill@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Account Manager</td>
                                    <td class="align-middle">3 May, 2021</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamFive"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamFive">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="assets/images/avatar/avatar-6.jpg"
                                                     alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="fw-bold mb-1">Darshini Nair</h5>
                                                <p class="mb-0">darshininair@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">Front End Developer</td>
                                    <td class="align-middle border-bottom-0">3 May, 2021</td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#"
                                               role="button" id="dropdownTeamSix"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownTeamSix">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="assets/libs/prismjs/components/prism-core.min.js"></script>
<script src="assets/libs/prismjs/components/prism-markup.min.js"></script>
<script src="assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>










<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>



<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>


</body>

</html>
