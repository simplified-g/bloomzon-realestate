<?php

	$block_attempts = "<button class='btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light' type='submit' id='emslogin'>Log In</button>";
	$blusertry = isset($_COOKIE["usertry"])? $_COOKIE["usertry"] : "NULL";
	
	if($blusertry==5){
	$warn = "<script> alert('Your Session Will be blocked after one More Wrong Attempt');</script>";
	 }
	if($blusertry>=6){
	$block_attempts = "<button class='btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light' type='submit' id='emslogin' disabled>Login Disabled</button>";
	}
if(isset($_GET['paka'])){

	if($_GET['paka'] == "loggedout"){
	$alertmessage = "<font style='color:#4682B4;'><b> You Have been logged out! </b></font>";
	}
	elseif($_GET['paka'] == "retry"){
	$alertmessage = "<font style='color:red;background-color:white'><b> Unable to Login - Contact Administrator! </b></font>";
	}
	elseif($_GET['paka'] == "invalid"){
	$alertmessage = "<font style='color:red'><b> Invalid Username or Password </b></font>";
	}elseif($_GET['paka'] == "ikasiwire"){
	$alertmessage = "<font style='color:red'><b> Account Disabled - Please Contact Admin</b></font>";
	}
	else{
	$alertmessage = "<font color=orange><b> Please Verify Your Account! </b></font>";
	}
}


?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <!-- Favicon icon -->
    <link rel='icon' type='image/png' sizes='16x16' href='../resources/images/favicon.png'>
    <title>Bloomzon Administrator Login</title>
    <!-- Bootstrap Core CSS -->
    <link href='../resources/plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link href='../resources/css/style.css' rel='stylesheet'>
    <!-- You can change the theme colors from here -->
    <link href='../resources/css/colors/blue.css' id='theme' rel='stylesheet'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
    <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
<![endif]-->
</head>

<body>
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
    <section id='wrapper'>
        <div class='login-register' style='background-image:url(../resources/images/background/login-register.jpg);'>
            <div class='login-box card'>
                <div class='card-body'>
                    <form class='form-horizontal form-material' id='loginform' action='session/ALPHA_igbedigi.php'
                        method='post'>
                        <h1 class='box-title m-b-20'>
                            <img src='../resources/images/logo-icon.png' title='Bloomzon' class='dark-logo pointer' />
                            Sign In
                        </h1>
                        <div class='form-group '>
                            <div class='col-xs-12'>
                                <input class='form-control' type='text' required='' placeholder='Username'
                                    name='username' autofocus>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='col-xs-12'>
                                <input class='form-control' type='password' required='' placeholder='Password'
                                    name='password'>
                            </div>
                            <input type='hidden' name='loginForm'>
                        </div>
                        <div class='form-group row'>
                            <div class='col-md-12 font-14'>
                                <div class='checkbox checkbox-primary pull-left p-t-0'>
                                    <input id='checkbox-signup' type='checkbox'>
                                    <label for='checkbox-signup'> Remember me </label>
                                </div> <a href='javascript:void(0)' id='to-recover' class='text-dark pull-right'>
                                    <!-- <i class='fa fa-lock m-r-5'></i> --> Forgot pwd?
                                </a>
                            </div>
                        </div>
                        <div class='form-group text-center m-t-20'>
                            <div class='col-xs-12'>
                                <p id='login_error'><?php if(isset($alertmessage)){echo $alertmessage;} ?></p>
                                <?php echo "$block_attempts"; ?>

                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-12 col-md-12 m-t-10 text-center'>
                                <div class='social'>
                                    <a href='javascript:void(0)' class='btn  btn-facebook' data-toggle='tooltip'
                                        title='Login with Facebook'> <i aria-hidden='true' class='fa fa-facebook'></i>
                                    </a>
                                    <a href='javascript:void(0)' class='btn btn-googleplus' data-toggle='tooltip'
                                        title='Login with Google'> <i aria-hidden='true' class='fa fa-google-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='form-group m-b-0'>
                            <div class='col-sm-12 text-center'>
                                <div>Back To <a href='pages-register.html'
                                        class='text-info m-l-5'><b><?php echo "<a href='../../'>Website</a>";?></b></a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class='form-horizontal' id='recoverform' action='index.html'>
                        <div class='form-group '>
                            <div class='col-xs-12'>
                                <h3>Recover Password</h3>
                                <p class='text-muted'>Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class='form-group '>
                            <div class='col-xs-12'>
                                <input class='form-control' type='text' required='' placeholder='Email'>
                            </div>
                        </div>
                        <div class='form-group text-center m-t-20'>
                            <div class='col-xs-12'>
                                <button class='btn btn-primary btn-lg text-uppercase waves-effect waves-light'
                                    type='submit'>Reset</button>
                                <button class='btn text-uppercase waves-effect waves-light' type='submit'
                                    id='backToLogin'>&laquo;Back</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src='../resources/plugins/jquery/jquery.min.js'></script>
    <script src='../resources/plugins/bootstrap/js/popper.min.js'></script>
    <script src='../resources/plugins/bootstrap/js/bootstrap.min.js'></script>
    <script src='js/jquery.slimscroll.js'></script>
    <script src='../resources/js/waves.js'></script>
    <script src='../resources/js/sidebarmenu.js'></script>
    <script src='../resources/plugins/sticky-kit-master/sticky-kit.min.js'></script>
    <script src='../resources/plugins/sparkline/jquery.sparkline.min.js'></script>
    <script src='../resources/js/custom.min.js'></script>
    <script src='../resources/plugins/styleswitcher/jQuery.style.switcher.js'></script>

</body>

</html>