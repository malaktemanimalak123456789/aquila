<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>* AQUILA *</title>
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ url('assets/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ url('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ url('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="{{ url('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ url('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                        </span>
                    </a>

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle text-white">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle text-white">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle text-white">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you
                                                        want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-note"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown"
                                aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="{{ url('assets/images/users/1.jpg') }}" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="{{ url('assets/images/users/2.jpg') }}" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="{{ url('assets/images/users/3.jpg') }}" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img">
                                                    <img src="{{ url('assets/images/users/4.jpg') }}" alt="user"
                                                        class="img-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <strong>See all e-Mails</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti-layout-width-default"></i>
                            </a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="{{ url('assets/images/big/img1.jpg') }}" alt="First slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="{{ url('assets/images/big/img2.jpg') }}" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container">
                                                        <img class="d-block img-fluid"
                                                            src="{{ url('assets/images/big/img3.jpg') }}" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> You can give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Forth link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another fifth link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle">
                            <a class="nav-link  waves-effect waves-light" href="javascript:void(0)">
                                <i class="ti-settings"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="{{ url('assets/images/users/2.jpg') }}" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave
                                Gection
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.html" class="dropdown-item">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">------ MENU          </li>
                        <li>
                                            <!------- ADMIN-------->

                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                               <i class="fa-solid fa-circle-user"></i>    
                                     <span class="hide-menu">Admin
                                    
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="admin">Liste admin </a>
                                </li>
                                <li>
                                    <a href="/ajouter-admin">Ajouter admin</a>
                                </li>
                                
                            </ul>
                        </li>
                                             <!------- CLIENT-------->

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="fa-solid fa-user"></i>                              
                                  <span class="hide-menu">Client</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="client">Liste client</a>
                                </li>
                                <li>
                                    <a href="ajouter">Ajouter client</a>
                                </li>
                            </ul>
                        </li>
                                              <!------- EMPLOYE-------->

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="fa-solid fa-user-gear"></i>
                                <span class="hide-menu">Employé</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="employe">Liste employe</a>
                                </li>
                                <li>
                                    <a href="ajouter-employe">Ajouter employe</a>
                                </li>
                                
                            </ul>
                        </li>

                        <!------- rendezvous-------->
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                             <i class="fa-solid fa-calendar-check"></i>
                                <span class="hide-menu">Rendez-vous
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="rendezvous">Liste rendez-vous</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <!------- Contact-------->
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="fa-solid fa-address-book"></i>
                                <span class="hide-menu">Contact
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="contact">Liste contact</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <!------- DEVIS-------->

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="fa-solid fa-euro-sign"></i>
                                <span class="hide-menu">Devis
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="devis">Devis</a>
                                </li>
                                
                                
                            </ul>
                        </li>
<!------- ZEYDDDDD 
                        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="form-basic.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="form-layout.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-addons.html">Form Addons</a>
                                </li>
                                <li>
                                    <a href="form-material.html">Form Material</a>
                                </li>
                                <li>
                                    <a href="form-float-input.html">Floating Lable</a>
                                </li>
                                <li>
                                    <a href="form-pickers.html">Form Pickers</a>
                                </li>
                                <li>
                                    <a href="form-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="form-mask.html">Form Mask</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                                <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                <li>
                                    <a href="form-dropzone.html">File Dropzone</a>
                                </li>
                                <li>
                                    <a href="form-icheck.html">Icheck control</a>
                                </li>
                                <li>
                                    <a href="form-img-cropper.html">Image Cropper</a>
                                </li>
                                <li>
                                    <a href="form-bootstrapwysihtml5.html">HTML5 Editor</a>
                                </li>
                                <li>
                                    <a href="form-typehead.html">Form Typehead</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a href="form-xeditable.html">Xeditable Editor</a>
                                </li>
                                <li>
                                    <a href="form-summernote.html">Summernote Editor</a>
                                </li>
                                <li>
                                    <a href="form-tinymce.html">Tinymce Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="table-layout.html">Table Layouts</a>
                                </li>
                                <li>
                                    <a href="table-data-table.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="table-footable.html">Footable</a>
                                </li>
                                <li>
                                    <a href="table-jsgrid.html">Js Grid Table</a>
                                </li>
                                <li>
                                    <a href="table-responsive.html">Responsive Table</a>
                                </li>
                                <li>
                                    <a href="table-bootstrap.html">Bootstrap Tables</a>
                                </li>
                                <li>
                                    <a href="table-editable-table.html">Editable Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-settings"></i>
                                <span class="hide-menu">Widgets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="widget-data.html">Data Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-apps.html">Apps Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-charts.html">Charts Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-gallery"></i>
                                <span class="hide-menu">Page Layout</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="layout-single-column.html">1 Column</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header.html">Fix header</a>
                                </li>
                                <li>
                                    <a href="layout-fix-sidebar.html">Fix sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html">Boxed Layout</a>
                                </li>
                                <li>
                                    <a href="layout-logo-center.html">Logo in Center</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-files"></i>
                                <span class="hide-menu">Sample Pages
                                    <span class="badge rounded-pill bg-info">25</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="starter-kit.html">Starter Kit</a>
                                </li>
                                <li>
                                    <a href="pages-blank.html">Blank page</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Authentication
                                        <span class="badge rounded-pill bg-success pull-right">6</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-login.html">Login 1</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register3.html">Register 3</a>
                                        </li>
                                        <li>
                                            <a href="pages-lockscreen.html">Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="pages-recover-password.html">Recover password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile page</a>
                                </li>
                                <li>
                                    <a href="pages-animation.html">Animation</a>
                                </li>
                                <li>
                                    <a href="pages-fix-innersidebar.html">Sticky Left sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-treeview.html">Treeview</a>
                                </li>
                                <li>
                                    <a href="pages-utility-classes.html">Helper Classes</a>
                                </li>
                                <li>
                                    <a href="pages-search-result.html">Search result</a>
                                </li>
                                <li>
                                    <a href="pages-scroll.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-lightbox-popup.html">Lighbox popup</a>
                                </li>
                                <li>
                                    <a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">Faqs</a>
                                </li> 
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-error-400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-503.html">503</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-pie-chart"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="chart-morris.html">Morris Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chartist.html">Chartis Chart</a>
                                </li>
                                <li>
                                    <a href="chart-echart.html">Echarts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Chart</a>
                                </li>
                                <li>
                                    <a href="chart-knob.html">Knob Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chart-js.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="chart-sparkline.html">Sparkline Chart</a>
                                </li>
                                <li>
                                    <a href="chart-extra-chart.html">Extra chart</a>
                                </li>
                                <li>
                                    <a href="chart-peity.html">Peity Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-light-bulb"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                                <li><a href="icon-iconmind.html">Mind Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-location-pin"></i>
                                <span class="hide-menu">Maps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="map-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="map-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-align-left"></i>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="javascript:void(0)">item 1.1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.2</a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.4</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- SUPPORT</li>
                        <li>
                            <a class="waves-effect waves-dark" href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html"
                                aria-expanded="false">
                                <i class="far fa-circle text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
                                <i class="far fa-circle text-info"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                        -------->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2022 AQUILA by TEMANI MALAK
            
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


    <script src="{{ url('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('assets/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ url('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ url('assets/node_modules/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('assets/js/custom.min.js') }}"></script>
    <!--This page plugins -->
    <script src="{{ url('assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                
            });
            

    </script>
</body>


</html>