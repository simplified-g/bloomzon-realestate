<?php require('ems_public_lib.inc.php');?>
<?php 
    $htitle = 'Bloomzon RealEstate | Real Estate Listing';
    if($_SERVER['PHP_SELF'] == '/property-details.php'){
        $property_id = isset($_GET['prop'])?(int)$_GET['prop']:0;
        $htitle = $emscms->get_this_data("title", "property_info", "prop_id", $property_id);
        $hdesc = $emscms->get_this_data("description", "property_info", "prop_id", $property_id);
        $himage = $emscms->get_this_data("img1", "property_info", "prop_id", $property_id);
        $imgurl = 'assets/upload/'.$property_id.'/'.$himage;
        $url = 'property-details.php?prop='.$property_id;
    }
    if($_SERVER['PHP_SELF'] == '/blog-single.php'){
        $blog_id = isset($_GET['pid'])?(int)$_GET['pid']:0;
        $htitle = $emscms->get_this_data("title", "posts", "id", $blog_id);
        $hdesc = $emscms->get_this_data("excerpt", "posts", "id", $blog_id);
        $himage = $emscms->get_this_data("image", "posts", "id", $blog_id);
        $imgurl = 'gallery/'.$himage;
        $url = 'blog-single.php?pid='.$blog_id;
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<script data-ad-client="ca-pub-2470033780641409" async
    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149843163-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-149843163-1');
    </script>
    <!-- Document Meta
    ============================================= -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="Real Estate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/state.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->

    <title><?php echo $htitle; ?></title>
    <link rel="image_src" href="<?php echo $imgurl; ?>" />
    <meta name="title" content="<?php echo $htitle; ?>">
    <meta name="channel" content="">
    <meta name="author" content="">
    <!--<meta name="description" content="<?php echo $hdesc; ?>">-->
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $htitle; ?>">
    <!--<meta property="og:description" content="<?php echo $hdesc; ?>">-->
    <meta property="og:image" itemprop="image" content="<?php echo $imgurl; ?>">
    <meta name="image" content="<?php echo $imgurl; ?>">

    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!--<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e14465ed5463300138a09c5&product=inline-share-buttons" async="async"></script>-->
    <script id="mcjs">
    ! function(c, h, i, m, p) {
        m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m,
            p)
    }(document, "script",
        "https://chimpstatic.com/mcjs-connected/js/users/454456addb79a9d2300a71a8e/9094b4b1a4139bba373422927.js");
    </script>
    <style type="text/css">
    .arrow-down {
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #002953;
    }

    .modal-content {
        border-radius: 0px !important;
    }

    .close {
        margin-top: -30px !important;
    }
    </style>
    <style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: #fff;
        padding: 16px;
        font-weight: 600;
        /*font-size: 16px;*/
        border: none;
        cursor: pointer;
        margin-top: 25px;
        /*color: #002953;*/
    }

    .affix .dropbtn {
        color: #222222;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fcfcfc;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }



    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #FF6B15
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #002953;
        color: #fff !important;
    }

    .property-item .property--title {
        height: 30px;
        overflow: hidden;
    }

    .navbar-fixed-bottom,
    .navbar-fixed-top {
        /* position: relative; */
        background-color: black
    }

    .arrow-down {
        color: #0d1a42 !important;
    }

    .badge {
        background-color: #ed1b24 !important;
        padding: 5px !important;
    }

    .page-title .title {
        padding: 180px 0 85px;
    }

    .form-box {
        background-color: #0d1a42 !important;
        color: #ffffff !important;
    }

    .form--title {
        color: #ffffff !important;
        font-size: 40px !important;
        text-align: center;
    }

    .rounded-btn {
        /* Green */
        border: none;
        padding: 7px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 2px 2px;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0px 10px 30px 0px rgba(52, 73, 94, 0.32);
    }

    .rounded-btn1 {
        background-color: #0d1a42;
        color: white;
    }

    .rounded-btn2 {
        background-color: #ffffff;
        color: #ed1b24;
    }

    .rounded-btn3 {
        background-color: #ed1b24;
        color: white;
    }
    </style>

</head>

<body>


    <script>
    function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response); // The current login status of the person.
        if (response.status === 'connected') { // Logged into your webpage and Facebook.
            testAPI();
        } else { // Not logged into your webpage or we are unable to tell.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this webpage.';
        }
    }


    function checkLoginState() { // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) { // See the onlogin handler
            statusChangeCallback(response);
        });
    }


    window.fbAsyncInit = function() {
        FB.init({
            appId: '542622943158578',
            cookie: true, // Enable cookies to allow the server to access the session.
            xfbml: true, // Parse social plugins on this webpage.
            version: 'v4.0' // Use this Graph API version for this call.
        });


        FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
            statusChangeCallback(response); // Returns the login status.
        });
    };


    (function(d, s, id) { // Load the SDK asynchronously
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';
        });
    }
    </script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=542622943158578&autoLogAppEvents=1">
    </script>

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php require('login_attempts.php'); ?>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="<?php $emscms->base()?>">
                            <img class="logo-light" src="assets/images/logo/logo-lights.png" alt="Land Logo"
                                style="height: 60px !important;">
                            <img class="logo-dark" src="assets/images/logo/logo-dark2.png" alt="Land Logo"
                                style="height: 60px !important;">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-center navbar-left">
                            <!-- Home Menu -->
                            <li class="active">
                                <a href="index.php" class="dropdown-toggle menu-item">home</a>
                                <!--<ul class="dropdown-menu">
                                    <li><a href="index.html">home search</a></li>
                                    <li><a href="home-map.html">home map</a></li>
                                    <li><a href="home-property.html">home property</a></li>
                                    <li><a href="home-splash.html">home splash</a></li>
                                </ul>-->
                            </li>
                            <!-- li end -->

                            <!-- Pages Menu-->
                            <li class="dropdown">
                                <button class="dropbtn">Properties</button>
                                <div class="dropdown-content">
                                    <a href="search-result.php?status=Sale">For Sale</a>
                                    <a href="search-result.php?status=Rent">For Rent</a>
                                </div>
                            </li>
                            <!-- li end -->

                            <!-- Properties Menu-->
                            <li class="">
                                <a href="#" class="dropdown-toggle menu-item">Blog</a>

                            </li>
                            <!-- li end -->

                            <li><a href="#">contact us</a></li>
                        </ul>
                        <!-- Module Signup  -->
                        <div class="module module-login pull-left">
                            <?php if($current_user!=""){
								$arr = explode(' ',trim($customername));
                           ?>
                            <ul style="list-style-type: none;">
                                <li class="dropdown">
                                    <button class="dropbtn">Hi,
                                        <?php echo $arr[0]; ?>&nbsp;<span class="caret"></span></button>
                                    <div class="dropdown-content">
                                        <a href="dashboard.php">Dashboard</a>
                                        <a href="ems-incs/logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <?php }else{ ?>
                            <a class="btn-popup" data-toggle="modal" data-target="#signupModule">Login</a>
                            <?php } 
								?>
                            <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#login" data-toggle="tab">login</a>
                                                    </li>
                                                    <li><a href="#signup" data-toggle="tab">signup</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="login">
                                                        <div class="signup-form-container text-center">
                                                            <!-- <form action="#" method="post" class="mb-0"> -->
                                                            <form action="ems-incs/performlogin.php" method="post"
                                                                class="mb-0">
                                                                <!-- FB Login Button -->
                                                                <div class="fb-login-button" data-width="290px"
                                                                    data-size="large" data-button-type="login_with"
                                                                    data-auto-logout-link="false"
                                                                    data-use-continue-as="false"></div>
                                                                <!-- End FB button -->
                                                                <?php if(isset($alertmessage)){echo $alertmessage;} ?>
                                                                <br />
                                                                <div class="or-text">
                                                                    <span>or</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control"
                                                                        name="username" id="login-email"
                                                                        placeholder="Email Address">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control"
                                                                        name="password" id="login-password"
                                                                        placeholder="Password">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="input-checkbox">
                                                                    <label class="label-checkbox">
                                                                        <span>Remember Me</span>
                                                                        <input type="checkbox">
                                                                        <span class="check-indicator"></span>
                                                                    </label>
                                                                </div>
                                                                <input type='hidden' name='loginForm'>
                                                                <input type="submit" class="btn btn--primary btn--block"
                                                                    value="Sign In">
                                                                <a href="forgotpwd.php" class="forget-password">Forget
                                                                    your password?</a>
                                                            </form>
                                                            <!-- form  end -->
                                                        </div>
                                                        <!-- .signup-form end -->
                                                    </div>
                                                    <div class="tab-pane" id="signup">
                                                        <form action="ems-incs/performlogin.php" class="mb-0"
                                                            method="post">
                                                            <!-- <form action="#" class="mb-0" method="post"> -->

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="full-name"
                                                                    id="full-name" placeholder="Full Name" required>
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    name="register-email" id="register-email"
                                                                    placeholder="Email Address" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    name="register-phone" id="register-email"
                                                                    placeholder="Phone Number" required>
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    name="register-password" id="register-password"
                                                                    placeholder="Password" required>
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="input-checkbox">
                                                                <label class="label-checkbox">
                                                                    <span>I agree with all <a href="#">Terms &
                                                                            Conditions</a></span>
                                                                    <input type="checkbox" required>
                                                                    <span class="check-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <input type='hidden' name='registerUser' value='1'>
                                                            <input type="submit" class="btn btn--primary btn--block"
                                                                value="Register">
                                                        </form>
                                                        <!-- form  end -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                        <!-- Module Consultation  -->
                        <div class="module module-property pull-left">
                            <?php if($current_user!=""){ ?>
                            <a href="<?php $emscms->base()?>add-property.php" class="btn"><i class="fa fa-plus"></i> add
                                property</a>
                            <?php }else{?>
                            <a class="btn btn-popup" data-toggle="modal" data-target="#signupModule"><i
                                    class="fa fa-plus"></i> add property</a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </header>