<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if(!isset($_SESSION['username']))
{
  
  header('location: auth-normal-sign-in.html');
}


?>

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css" />
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all" />
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css" />
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css" />
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i
                                                class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword" />
                                        <span class="input-group-append search-btn"><i
                                                class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle">
                                    <a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-2.jpg" alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user"><?php if(isset($_SESSION['username']))
                                                {
                                                  echo $_SESSION['username'];
                                                }else{
                                                  echo 'John Doe';
                                                  } ?></h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-4.jpg" alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-3.jpg" alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" />
                                    <span><?php if(isset($_SESSION['username']))
                                                {
                                                  echo $_SESSION['username'];
                                                }else{
                                                  echo 'John Doe';
                                                  } ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!"> <i class="ti-settings"></i> Settings </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle">
                            <a href="#"><i class="icon-close icons"></i></a>
                        </div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg"
                                        alt="User-Profile-Image" />
                                    <div class="user-details">
                                        <span id="more-details"><?php if(isset($_SESSION['username']))
                                                {
                                                  echo $_SESSION['username'];
                                                }else{
                                                  echo 'John Doe';
                                                  } ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" />
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search
                                            Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Basic</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Notifications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="chart-morris.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                        <span class="pcoded-mtext">Charts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="sample-page.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i
                                                        class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Memeber List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Member List</h5>
                                            <p class="m-b-0">
                                                Lorem Ipsum is simply dummy text of the printing
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">Member List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Member List</h5>
                                                        <span>lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit</span>
                                                        <p id="member-counter" style="color: #2ecc71">
                                                            Member Counte
                                                        </p>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li>
                                                                    <i class="fa fa fa-wrench open-card-option"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-window-maximize full-card"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-minus minimize-card"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-refresh reload-card"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-trash close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive m-0 p-0">
                                                            <table class="table table-hover">
                                                                <thead class="text-capitalize text-center">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Username</th>
                                                                        <th>Email</th>
                                                                        <th>Password</th>
                                                                        <th>Gender</th>
                                                                        <th>Age</th>
                                                                        <th>Country</th>
                                                                        <th>Date Of Birth</th>
                                                                        <th>Phone</th>
                                                                        <th>TermSubscribe</th>
                                                                        <th>LetterSubscribe</th>
                                                                        <th>Member Control</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="data-table">
                                                                    <tr style="cursor: pointer">
                                                                        <td>1</td>
                                                                        <td>PeeraphatW</td>
                                                                        <td>Judiciarypz@gmail.com</td>
                                                                        <td>R8ttzrc1</td>
                                                                        <td>Male</td>
                                                                        <td>23</td>
                                                                        <td>Thailand</td>
                                                                        <td>10/01/1997</td>
                                                                        <td>0944368295</td>
                                                                        <td>On</td>
                                                                        <td>On</td>
                                                                        <td>
                                                                            <button
                                                                                class="btn waves-effect waves-light btn-danger">
                                                                                <i
                                                                                    class="icofont icofont-eye-alt"></i>Danger
                                                                                Button
                                                                            </button>
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
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
      <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>
          You are using an outdated version of Internet Explorer, please upgrade
          <br />to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
          <ul class="iew-download">
            <li>
              <a href="http://www.google.com/chrome/">
                <img src="assets/images/browser/chrome.png" alt="Chrome" />
                <div>Chrome</div>
              </a>
            </li>
            <li>
              <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="assets/images/browser/firefox.png" alt="Firefox" />
                <div>Firefox</div>
              </a>
            </li>
            <li>
              <a href="http://www.opera.com">
                <img src="assets/images/browser/opera.png" alt="Opera" />
                <div>Opera</div>
              </a>
            </li>
            <li>
              <a href="https://www.apple.com/safari/">
                <img src="assets/images/browser/safari.png" alt="Safari" />
                <div>Safari</div>
              </a>
            </li>
            <li>
              <a
                href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"
              >
                <img src="assets/images/browser/ie.png" alt="" />
                <div>IE (9 & above)</div>
              </a>
            </li>
          </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
      </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script>
    const dataTable = document.querySelector('#data-table');
    const AddData = (data) => {
        if (data === '') {
            return;
        } else {
            dataTable.removeChild(dataTable.children[0]);
        }

        const key = Object.keys(data);
        document.querySelector('#member-counter').innerHTML =
            'Member Counte : ';
        document.querySelector('#member-counter').innerHTML += `${key.length}`;
        dataTable.innerHTML = '';
        for (let i = 0; i <= key.length; i++) {
            const row = document.createElement('tr');
            row.style.cursor = 'pointer';
            row.innerHTML = `
          <td>${data[key[i]].id}</td>
          <td>${data[key[i]].username}</td>
          <td>${data[key[i]].email}</td>
          <td>${data[key[i]].password}</td>
          <td>${data[key[i]].gender == 'm' ? 'Male' : 'Female'}</td>
          <td>${data[key[i]].age}</td>
          <td>${data[key[i]].country}</td>
          <td>${data[key[i]].dateofbirth}</td>
          <td>${data[key[i]].phone}</td>
          <td>${data[key[i]].term}</td>
          <td>${data[key[i]].letter}</td>
          <td>
                <button type="button" onclick="clearInterval(runtime);" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#ModalEdit${
                  data[key[i]].id
                }">
                  </i>Edit
                </button>
                  <div class="modal fade" id="ModalEdit${
                    data[key[i]].id
                  }" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">EditUser ${
                            data[key[i]].username
                          }</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form>
                        <div class="modal-body">
                          <div class="card-block">

                  <div class="form-group form-primary">
                    <input type="text" name="Usr" class="form-control" autocomplete="off" value=${
                      data[key[i]].username
                    }>
                    <span class="form-bar"></span>
                    <label class="float-label">Username</label>
                  </div>
                  <div class="form-group form-primary">
                    <input type="text" name="Em" class="form-control" autocomplete="off" value=${
                      data[key[i]].email
                    }>
                    <span class="form-bar"></span>
                    <label class="float-label">Email Address</label>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-primary">
                        <input type="test" name="Pwd" id="password" class="form-control" value=${
                          data[key[i]].password
                        }>
                        <span class="form-bar"></span>
                        <label class="float-label">Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <div class="form-group form-primary">
                        <select name="Gen" id="Gender" class="form-control fill">
                          <option value="${data[key[i]].gender}">${
            data[key[i]].gender == 'm' ? 'Male' : 'Female'
          }</option>
                      ${
                        data[key[i]].gender == 'm'
                          ? '<option value="f">female</option>'
                          : ' <option value="m">Male</option>'
                      }
                        </select>
                        <span class="form-bar"></span>
                        <label class="float-label">Gender</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-primary">
                        <input type="number" name="Age" id="" class="form-control" min="0" value="${
                          data[key[i]].age
                        }">
                        <label for="" class="float-label">Age</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-primary">
                    <input type="date" name="Db" class="form-control" value="${
                      data[key[i]].dateofbirth
                    }">
                    <span class="form-bar"></span>
                    <label class="float-label">Date of Birth</label>
                  </div>
                  <div class="form-group form-primary">
                    <input type="text" maxlength="10" name="Tel" class="form-control" autocomplete="off" value="${
                      data[key[i]].phone
                    }">
                    <span class="form-bar"></span>
                    <label class="float-label">Phone Number(Optional)</label>
                  </div>
                </div>
                        </div>
                        <div class="modal-footer">

                          <input type="hidden" name="id" value="${
                            data[key[i]].id
                          }">
                          <input type="hidden" name="ReqType" value="Update">
                          <button type="button" class="btn btn-primary" onclick="updateMember(this.form,${
                            data[key[i]].id
                          })">Save changes</button>
                          <button type="button" class="btn btn-secondary" id="close${
                            data[key[i]].id
                          }" data-dismiss="modal">Close</button>
                        </div>
                        <form>
                      </div>
                    </div>
                  </div>


                  <button  class="btn waves-effect waves-light btn-danger" value=${
                    data[key[i]].id
                  } onclick="deleteMember(this.value)"><i class="icofont icofont-check-circled"></i>Delete</button>

            </td>

          `;

            dataTable.appendChild(row);
        }
    };
    fetch('Get_member_api.php', {
            method: 'GET'
        })
        .then((data) => data.json())
        .then((data) => {
            AddData(data);
        });

    const runtime = setInterval(() => {
        fetch('Get_member_api.php', {
                method: 'GET'
            })
            .then((data) => data.json())
            .then((data) => {
                AddData(data);
            })
            .catch((error) => console.log(error));
    }, 2000);

    const deleteMember = (id) => {
        fetch('Get_member_api.php', {
                method: 'POST',
                body: new URLSearchParams(`id=${id}&ReqType=Delete`),
            })
            .then((data) => {
                if (data.status === 200) {
                    fetch('Get_member_api.php', {
                            method: 'GET'
                        })
                        .then((data) => data.json())
                        .then((data) => {
                            AddData(data);
                        });
                }
            })
            .catch((e) => console.log(e));
    };

    const updateMember = (param, fid) => {
        console.log(new FormData(param));
        fetch('Get_member_api.php', {
            method: 'POST',
            body: new FormData(param),
        }).then((data) => {
            if (data.status == 200) {
                fetch('Get_member_api.php', {
                        method: 'GET'
                    })
                    .then((data) => data.json())
                    .then((data) => {
                        AddData(data);
                    });
            }
            document.querySelector(`#close${fid}`).click();
        });
    };
    </script>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.min.js"></script>
</body>

</html>