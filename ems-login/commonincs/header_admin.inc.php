<?php require_once("ems_admin_lib.inc.php");

?>
<?php
	$notify = $label = $notify1 = "";
	$num = $emscms->new_property_notification();
	$report = $emscms->report_notification();
	if($num>0){
		$notify = "<div class='alert alert-danger alert-dismissible fade in'>
					<strong>Notice! You have ".$num." <b>unapproved</b> properties!</strong>
					</div>";
		$label = "label-danger";
	}
	if($report>0){
		$notify1 = "<div class='alert alert-danger alert-dismissible fade in'>
					<strong>Notice! You have ".$report." <b>reported</b> properties!</strong>
					</div>";
		$label = "label-danger";
	}
	//$myname = $emscms->get_this_data("first_name","users","id",$regno);
 ?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <!-- Favicon icon -->
    <link rel='icon' type='image/png' sizes='16x16' href='../resources/images/favicon.png'>
    <title>Bloomzon Real Estate Admin</title>
    <link href='../resources/plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='../resources/plugins/summernote/dist/summernote.css'>
    <link href='../resources/css/style.css' rel='stylesheet'>
    <link href='../resources/css/colors/blue.css' id='theme' rel='stylesheet'>
    <link href='../resources/plugins/dropify/dist/css/dropify.min.css' rel='stylesheet'>
    <link href='../resources/plugins/sweetalert/sweetalert.css' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
    <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
<![endif]-->
</head>
<style>
.fade:not(.show) {
    opacity: 1;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #841c1c00;
    border-radius: 4px;
}
</style>

<body class='fix-header card-no-border'>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class='preloader'>
        <svg class='circular' viewBox='25 25 50 50'>
            <circle class='path' cx='50' cy='50' r='20' fill='none' stroke-width='2' stroke-miterlimit='10' />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id='main-wrapper'>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class='topbar'>
            <nav class='navbar top-navbar navbar-expand-md navbar-light'>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class='navbar-header'>
                    <a class='navbar-brand' href='index'>
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class='wi wi-sunset'></i> //-->
                            <!-- Dark Logo icon -->
                            <img src='../resources/images/logo-icon.png' title='' class='dark-logo' />
                            <!-- Light Logo icon -->
                            <img src='../assets/images/logo-light-icon.png' alt='homepage' class='light-logo' />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src='../resources/images/logo-text.png' alt='homepage' class='dark-logo' />
                            <!-- Light Logo text -->
                            <img src='../assets/images/logo-light-text.png' class='light-logo' alt='homepage' />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class='navbar-collapse'>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class='navbar-nav mr-auto mt-md-0'>
                        <!-- This is  -->
                        <li class='nav-item'> <a
                                class='nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark'
                                href='javascript:void(0)'></a> </li>
                        <li class='nav-item m-l-10'> <a
                                class='nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark'
                                href='javascript:void(0)'><i class='ti-menu'></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class='nav-item dropdown'>
                            <!--<a class='nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark' href='' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <i class='mdi mdi-message'></i>
                                <div class='notify'> <span class='heartbit'></span> <span class='point'></span> </div>
                            </a>-->
                            <div class='dropdown-menu mailbox animated slideInUp'>
                                <ul>
                                    <li>
                                        <div class='drop-title'>Notifications</div>
                                    </li>
                                    <li>
                                        <div class='message-center'>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='btn btn-danger btn-circle'><i class='fa fa-link'></i></div>
                                                <div class='mail-contnet'>
                                                    <h5>Luanch Admin</h5> <span class='mail-desc'>Just see the my new
                                                        admin!</span> <span class='time'>9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='btn btn-success btn-circle'><i class='ti-calendar'></i>
                                                </div>
                                                <div class='mail-contnet'>
                                                    <h5>Event today</h5> <span class='mail-desc'>Just a reminder that
                                                        you have event</span> <span class='time'>9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='btn btn-info btn-circle'><i class='ti-settings'></i></div>
                                                <div class='mail-contnet'>
                                                    <h5>Settings</h5> <span class='mail-desc'>You can customize this
                                                        template as you want</span> <span class='time'>9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='btn btn-primary btn-circle'><i class='ti-user'></i></div>
                                                <div class='mail-contnet'>
                                                    <h5>Pavan kumar</h5> <span class='mail-desc'>Just see the my
                                                        admin!</span> <span class='time'>9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class='nav-link text-center' href='javascript:void(0);'> <strong>Check all
                                                notifications</strong> <i class='fa fa-angle-right'></i> </a>
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
                        <li class='nav-item dropdown'>
                            <!--<a class='nav-link dropdown-toggle text-muted waves-effect waves-dark' href='' id='2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <i class='mdi mdi-email'></i>
                                <div class='notify'> <span class='heartbit'></span> <span class='point'></span> </div>
                            </a>-->
                            <div class='dropdown-menu mailbox animated slideInUp' aria-labelledby='2'>
                                <ul>
                                    <li>
                                        <div class='drop-title'>You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class='message-center'>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='user-img'> <img src='../resources/images/users/avatar.png'
                                                        alt='user' class='img-circle'> <span
                                                        class='profile-status online pull-right'></span> </div>
                                                <div class='mail-contnet'>
                                                    <h5>Pavan kumar</h5> <span class='mail-desc'>Just see the my
                                                        admin!</span> <span class='time'>9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='user-img'> <img src='../resources/images/users/avatar.png'
                                                        alt='user' class='img-circle'> <span
                                                        class='profile-status busy pull-right'></span> </div>
                                                <div class='mail-contnet'>
                                                    <h5>Sonu Nigam</h5> <span class='mail-desc'>I've sung a song! See
                                                        you at</span> <span class='time'>9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='user-img'> <img src='../resources/images/users/avatar.png'
                                                        alt='user' class='img-circle'> <span
                                                        class='profile-status away pull-right'></span> </div>
                                                <div class='mail-contnet'>
                                                    <h5>Arijit Sinh</h5> <span class='mail-desc'>I am a singer!</span>
                                                    <span class='time'>9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href='#'>
                                                <div class='user-img'> <img src='../resources/images/users/avatar.png'
                                                        alt='user' class='img-circle'> <span
                                                        class='profile-status offline pull-right'></span> </div>
                                                <div class='mail-contnet'>
                                                    <h5>Pavan kumar</h5> <span class='mail-desc'>Just see the my
                                                        admin!</span> <span class='time'>9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class='nav-link text-center' href='javascript:void(0);'> <strong>See all
                                                e-Mails</strong> <i class='fa fa-angle-right'></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class='navbar-nav my-lg-0'>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class='nav-item hidden-sm-down search-box'> <a
                                class='nav-link hidden-sm-down text-muted waves-effect waves-dark'
                                href='javascript:void(0)'><i class='ti-search'></i></a>
                            <form class='app-search'>
                                <input type='text' class='form-control' placeholder='Search & enter'> <a
                                    class='srh-btn'><i class='ti-close'></i></a>
                            </form>
                        </li>

                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-muted waves-effect waves-dark' href=''
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <i
                                    class='flag-icon flag-icon-ng'></i></a>
                            <div class='dropdown-menu dropdown-menu-right scale-up'> <a class='dropdown-item'
                                    href='#'><i class='flag-icon flag-icon-ng'></i> Proudly Nigerian</a> </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-muted waves-effect waves-dark' href=''
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><img
                                    src='../resources/images/users/avatar.png' alt='user' class='profile-pic' /></a>
                            <div class='dropdown-menu dropdown-menu-right scale-up'>
                                <ul class='dropdown-user'>
                                    <li>
                                        <div class='dw-user-box'>
                                            <div class='u-img'><img src='../resources/images/users/avatar.png'
                                                    alt='user'></div>
                                            <div class='u-text'>
                                                <h4><?php echo $emscms->myfullname;?></h4>
                                                <p class='text-muted'><?php echo $emscms->callname($emscms->myemail);?>
                                                </p><a href='pages-profile.html'
                                                    class='btn btn-rounded btn-danger btn-sm'>View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role='separator' class='divider'></li>
                                    <li><a href='#'><i class='ti-user'></i> Change Password</a></li>
                                    <li role='separator' class='divider'></li>
                                    <li><a href='#'><i class='ti-settings'></i> Settings</a></li>
                                    <li role='separator' class='divider'></li>
                                    <li><a href='?paka=1'><i class='fa fa-power-off'></i> Logout</a></li>
                                </ul>
                            </div>
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
        <aside class='left-sidebar'>
            <!-- Sidebar scroll-->
            <div class='scroll-sidebar'>
                <!-- User profile -->
                <div class='user-profile'>
                    <!-- User profile image -->
                    <div class='profile-img'> <img src='../resources/images/users/avatar.png' title='user' />
                    </div>
                    <!-- User profile text-->
                    <div class='profile-text'>
                        <h5>Hi, <?php echo $emscms->myname; ?></h5>
                        <a href='#' class='dropdown-toggle u-dropdown' data-toggle='dropdown' role='button'
                            aria-haspopup='true' aria-expanded='true'><i class='mdi mdi-settings'></i></a>
                        <a href='javascript:;' class='' data-toggle='tooltip' title='Email (Not Installed)'><i
                                class='mdi mdi-gmail'></i></a>
                        <a href='?paka=1' class='' data-toggle='tooltip' title='Logout'><i
                                class='mdi mdi-power'></i></a>
                        <div class='dropdown-menu animated flipInY'>
                            <!-- text-->
                            <a href='#' class='dropdown-item'><i class='ti-user'></i> My Profile</a>
                            <div class='dropdown-divider'></div>
                            <!-- text-->
                            <a href='#' class='dropdown-item'><i class='ti-settings'></i> Settings</a>
                            <!-- text-->
                            <div class='dropdown-divider'></div>
                            <!-- text-->
                            <a href='?paka=1' class='dropdown-item'><i class='fa fa-power-off'></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->

                <nav class='sidebar-nav'>
                    <ul id='sidebarnav'>
                        <li class='nav-devider'></li>
                        <li> <a class='waves-effect waves-dark' href='index.php' aria-expanded='false'><i
                                    class='mdi mdi-gauge'></i><span class='hide-menu'>DASHBOARD </span></a>
                        </li>
                        <li> <a class='has-arrow waves-effect waves-dark' href='property-list.php'
                                aria-expanded='false'><i class='mdi mdi-window-open'></i><span
                                    class='hide-menu'>Properties</span></a>
                        </li>
                        <li> <a class='has-arrow waves-effect waves-dark' href='mod-agents-list.php'
                                aria-expanded='false'><i class='mdi mdi-window-open'></i><span
                                    class='hide-menu'>Agents</span></a>
                        </li>
                        <li> <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><i
                                    class='mdi mdi-window-open'></i><span class='hide-menu'>Posts</span></a>
                            <ul aria-expanded='false' class='collapse'>
                                <li><a href='post-list'>List All</a></li>
                                <li><a href='post-new'>Add New</a></li>
                            </ul>
                        </li>

                        <li> <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><i
                                    class='mdi mdi-clipboard-account'></i><span class='hide-menu'>Users</span></a>
                            <ul aria-expanded='false' class='collapse'>
                                <li><a href='user-list'>List All</a></li>
                                <li><a href='user-new'>Add New</a></li>
                            </ul>
                        </li>

                        <li> <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><i
                                    class='mdi mdi-camera'></i><span class='hide-menu'>Media</span></a>
                            <ul aria-expanded='false' class='collapse'>
                                <li><a href='media-list'>List All</a></li>
                                <li><a href='media-new'>Add New</a></li>
                                <li><a href='media-sizes'>Dimensions</a></li>
                            </ul>
                        </li>

                        <li> <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><i
                                    class='mdi mdi-wrench'></i><span class='hide-menu'>Settings </span></a>
                            <ul aria-expanded='false' class='collapse'>
                                <li>
                                    <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><span
                                            class='hide-menu'> Posts </span></a>
                                    <ul aria-expanded='false' class='collapse'>
                                        <li><a href='setting-lock-post'>Lock Posts</a></li>
                                    </ul>
                                </li>
                                <li><a href='setting-logs'>View Logs</a></li>

                            </ul>
                        </li>
                        <li> <a class='has-arrow waves-effect waves-dark' href='#' aria-expanded='false'><i
                                    class='mdi mdi-worker'></i><span class='hide-menu'>Profile</span></a>
                            <ul aria-expanded='false' class='collapse'>
                                <li><a href=''>View Profile</a></li>
                                <li><a href=''>Update Profile</a></li>
                                <li><a href=''>Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->