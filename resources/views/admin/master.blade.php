<!DOCTYPE html>
<html lang="en">


<head>
    <title>Admindek | Admin Template</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <link rel="icon" href="{{asset('/')}}admin/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="{{asset('/')}}admin/files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/files/assets/css/widget.css">
</head>
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset('/')}}admin/files/assets/images/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('/')}}admin/files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                            <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                                @csrf
                                            </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('/')}}admin/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{asset('/')}}admin/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class>
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class>
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{asset('/')}}admin/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class>
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{\Request::route()->getName() == 'dashboard' ? 'active' : ''}}">
                                    <a href="{{route('dashboard')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu {{\Request::route()->getName() == 'category.add' || \Request::route()->getName() == 'category.manage' || \Request::route()->getName() == 'category.edit' ? 'active pcoded-trigger' : ''}}">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Category Module</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{\Request::route()->getName() == 'category.add' ? 'active' : ''}}">
                                            <a href="{{route('category.add')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add Category</span>
                                            </a>
                                        </li>
                                        <li class="{{\Request::route()->getName() == 'category.manage' ||  \Request::route()->getName() == 'category.edit' ? 'active' : ''}}">
                                            <a href="{{route('category.manage')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Manage Category</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {{\Request::route()->getName() == 'blog.add' || \Request::route()->getName() == 'blog.manage' || \Request::route()->getName() == 'blog.edit' ? 'active pcoded-trigger' : ''}}">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
                                        <span class="pcoded-mtext">Blog Module</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{\Request::route()->getName() == 'blog.add' ? 'active' : ''}}">
                                            <a href="{{route('blog.add')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add Blog</span>
                                            </a>
                                        </li>
                                        <li class="{{\Request::route()->getName() == 'blog.manage' || \Request::route()->getName() == 'blog.edit' ? 'active' : ''}}">
                                            <a href="{{route('blog.manage')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Manage Blog</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-gitlab"></i>
</span>
                                        <span class="pcoded-mtext">Comment Module</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/draggable.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Manage Comment</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-package"></i>
</span>
                                        <span class="pcoded-mtext">User Module</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="default/session-timeout.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Add User</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="default/session-idle-timeout.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Manage User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-content">
                    @yield('body')
                </div>

                <div id="styleSelector">
                </div>

            </div>
        </div>
    </div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="./{{asset('/')}}admin/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="./{{asset('/')}}admin/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="./{{asset('/')}}admin/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="./{{asset('/')}}admin/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="./{{asset('/')}}admin/files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('/')}}admin/files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="{{asset('/')}}admin/files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="{{asset('/')}}admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="{{asset('/')}}admin/files/assets/pages/chart/float/jquery.flot.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/chart/float/jquery.flot.categories.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/chart/float/curvedLines.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>

<script src="{{asset('/')}}admin/files/bower_components/chartist/js/chartist.js"></script>

<script src="{{asset('/')}}admin/files/assets/pages/widget/amchart/amcharts.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/widget/amchart/serial.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/widget/amchart/light.js"></script>


<script src="{{asset('/')}}admin/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{asset('/')}}admin/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="{{asset('/')}}admin/files/assets/pages/data-table/js/data-table-custom.js"></script>

<script src="{{asset('/')}}admin/files/assets/js/pcoded.min.js"></script>
<script src="{{asset('/')}}admin/files/assets/js/vertical/vertical-layout.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/files/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}admin/files/assets/js/script.min.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 06:24:25 GMT -->
</html>
