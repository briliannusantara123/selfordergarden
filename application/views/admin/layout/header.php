<!DOCTYPE html>
<html lang="en">

<head>
    <title>Self Order Admin</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/assetsadmin/images/favicon.ico'); ?>" type="image/x-icon">
    <link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url('assets/assetsadmin/css/style.css'); ?>">
    <style type="text/css">
        .icon-container {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 25px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: 25px; /* Sesuaikan dengan ukuran yang diinginkan */
            border-radius: 50%; /* Membuat lingkaran */
            background-color: <?= $color->color ?>; /* Warna biru */
            color: white; /* Warna ikon */
        }

    </style>
    
    

</head>
<body class="" style="background: #198754">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >
                
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="<?= base_url('assets/userkosong.png'); ?>" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details"><?= $this->session->userdata('usernameadmin') ?><i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <!-- <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                            <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li> -->
                            
                            <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="feather icon-lock m-r-5"></i>Change Password</a></li>
                            <li class="list-group-item"><a href="<?= base_url() ?>index.php/login/logoutadmin"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label style="color: #198754">Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('index.php/Admin') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <!-- <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="bc_alert.html">Alert</a></li>
                            <li><a href="bc_button.html">Button</a></li>
                            <li><a href="bc_badges.html">Badges</a></li>
                            <li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
                            <li><a href="bc_card.html">Cards</a></li>
                            <li><a href="bc_collapse.html">Collapse</a></li>
                            <li><a href="bc_carousel.html">Carousel</a></li>
                            <li><a href="bc_grid.html">Grid system</a></li>
                            <li><a href="bc_progress.html">Progress</a></li>
                            <li><a href="bc_modal.html">Modal</a></li>
                            <li><a href="bc_spinner.html">Spinner</a></li>
                            <li><a href="bc_tabs.html">Tabs & pills</a></li>
                            <li><a href="bc_typography.html">Typography</a></li>
                            <li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
                            <li><a href="bc_toasts.html">Toasts</a></li>
                            <li><a href="bc_extra.html">Other</a></li>
                        </ul>
                    </li> -->
                    <?php if ($this->session->userdata('role') == 'operation' || $this->session->userdata('role') == 'admin'): ?>
                        <li class="nav-item pcoded-menu-caption">
                            <label style="color: #198754">Master Data</label>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Admin/option') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Option</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Admin/addon') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add On</span></a>
                        </li>
                    <?php endif ?>
                    <?php if ($this->session->userdata('role') == 'marketing' || $this->session->userdata('role') == 'admin'): ?>
                        <li class="nav-item pcoded-menu-caption">
                            <label style="color: #198754">Settings</label>
                        </li>
                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                            <li class="nav-item">
                                <a href="<?= base_url('index.php/Admin/users') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">Users</span></a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Admin/icon') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Icon</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Admin/color') ?>" class="nav-link "><span class="pcoded-micon"><div class="icon-container"><i class="feather icon-map"></i></div></span><span class="pcoded-mtext">Color</span></a>
                        </li>
                    <?php endif ?>
                    
                    <!-- <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                            <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->

                </ul>
                
                <!-- <div class="card text-center">
                    <div class="card-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="feather icon-sunset f-40"></i>
                        <h6 class="mt-3">Download Pro</h6>
                        <p>Getting more features with pro version</p>
                        <a href="https://1.envato.market/qG0m5" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
                    </div>
                </div> -->
                
            </div>
        </div>
    </nav>
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue" style="background-color: #198754">
        
            
                <div class="m-header">
                    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                    <a href="#!" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <img src="<?= base_url('assets/logotransparan.png'); ?>" alt="" class="logo" style="width: 150px;color: white;">
                        <img src="<?= base_url('assets/logotransparan.png'); ?>" alt="" class="logo-thumb" style="width: 150px;color: white;">
                    </a>
                    <a href="#!" class="mob-toggler">
                        <i class="feather icon-more-vertical"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="navbar-nav ml-auto">
                        <!-- <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                                <div class="dropdown-menu dropdown-menu-right notification">
                                    <div class="noti-head">
                                        <h6 class="d-inline-block m-b-0">Notifications</h6>
                                        <div class="float-right">
                                            <a href="#!" class="m-r-10">mark as read</a>
                                            <a href="#!">clear all</a>
                                        </div>
                                    </div>
                                    <ul class="noti-body">
                                        <li class="n-title">
                                            <p class="m-b-0">NEW</p>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/userkosong.png'); ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong><?= $this->session->userdata('usernameadmin') ?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                    <p>New ticket Added</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="n-title">
                                            <p class="m-b-0">EARLIER</p>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/assetsadmin/images/user/avatar-2.jpg'); ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                    <p>Prchace New Theme and make payment</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/userkosong.png'); ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                    <p>currently login</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/assetsadmin/images/user/avatar-2.jpg'); ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                    <p>Prchace New Theme and make payment</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="noti-footer">
                                        <a href="#!">show all</a>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li>
                            <div class="dropdown drp-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-notification" style="border-radius: 10px;">
                                    <div class="pro-head">
                                        <img src="<?= base_url('assets/userkosong.png'); ?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?= $this->session->userdata('usernameadmin') ?></span>
                                        <a href="<?= base_url() ?>index.php/login/logoutadmin" class="dud-logout" title="Logout">
                                            <i class="feather icon-log-out"></i>
                                        </a>
                                    </div>
                                    <ul class="pro-body">
                                        <!-- <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                        <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li> -->
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="feather icon-lock"></i> Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
            
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"  style="border-radius: 20px;">
            <div class="modal-header" style="background-color: #198754;border-radius: 20px;">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Change Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?= base_url() ?>index.php/login/changepw" method="POST">
              <div class="modal-body">
                <input type="hidden" name="username" value="<?= $this->session->userdata('usernameadmin') ?>">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Current Password <span style="color: red;">*</span></label>
                    <input type="password" name="passwordOLD" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">New Password <span style="color: red;">*</span></label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" style="background-color: #198754">Save changes</button>
              </div>
          </form>
        </div>
      </div>
    </div>