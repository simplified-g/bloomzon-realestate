<?php require_once("../commonincs/header_admin.inc.php");?>
 <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
				<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Welcome To <?php echo $emscms->app_name;?> Admin Dashboard</h4>
								<small>Click on the menus at the left or menus below to manage properties and more</small><br/><br/>
									<?php echo $notify; ?><?php echo $notify1; ?>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4>View And Manage Properties</h4>
								<small>View and Manage all the properties</small><br/><br/>
								<p><a href='property-list.php' class='btn btn-primary'><i class='mdi mdi-plus'></i>View</a></p>
                            </div>
                        </div>
                    </div>
					<div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4>View Registered Agents</h4>
								<small>View the list of all registered agents</small><br/><br/>
								<p><a href='mod-agents-list.php' class='btn btn-primary'><i class='mdi mdi-plus'></i>View</a></p>
                            </div>
                        </div>
                    </div>
					<div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4>User's Comments</h4>
								<small>View and Manage User's Comments</small><br/><br/>
								<p><a href='mod-comments-list.php' class='btn btn-primary'><i class='mdi mdi-plus'></i>View</a></p>
                            </div>
                        </div>
                    </div>
					<div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4>Reported Properties</h4>
								<small>View and Manage Reported Properties</small><br/><br/>
								<p><a href='mod-reported-list.php' class='btn btn-primary'><i class='mdi mdi-plus'></i>View</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                
<?php require_once("../commonincs/footer_admin.inc.php");?>

</body>
</html>
