<?php require_once("../commonincs/header_admin.inc.php");
	$reply = $emscms->show_server_msg();
	
	//$rest_addr = $address.", ".$city.", ".$state;
	//$post_id = $post_id;
	$property = isset($_GET['property'])?$emscms->wordify($_GET['property']):"";
	$featured_status = $emscms->get_this_data("featured", "property_info", "prop_id", $property);
	$approval_status = $emscms->get_this_data("approved", "property_info", "prop_id", $property);
	
	
	
	
	
	$servername = "localhost";
    $username = "gohomeng_db_user";
    $password = "4T5RxsDOX1PeOX!f4a%8";
    $db = "gohomeng_web_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $get_user_id = "SELECT user_id FROM property_info WHERE prop_id = '$property' LIMIT 1";
    $get_user_id_result = $conn->query($get_user_id);
    
    while($row = $get_user_id_result->fetch_assoc()) {
        $u_id = $row["user_id"];
    }
    
    // now get user email from user id
    $get_user_email = "SELECT email FROM agents WHERE id = '$u_id' LIMIT 1";
    $get_user_email_result = $conn->query($get_user_email);
    while($row2 = $get_user_email_result->fetch_assoc()) {
        $u_email = $row2["email"];
    }
    
    // if($conn->query("UPDATE agents SET is_activated = 1, activation_code = '' WHERE activation_code = '$activation_code'")) {
    //     header('Location: /index.php');
    // } else {
    //     echo 'Error activating your account, please try again';
    // }





?>
<?php
   /**
	if(isset($_GET['delid']) && isset($_GET['rid'])){
		$delid = (int)$_GET['delid'];
		$mid = (int)$_GET['rid'];
		$status = "";
		if($delid > 0){
			$status = $emscms->delete_this_data("mod_restaurant_menu","id",$delid);
			$emscms->set_server_msg("Menu Successfully Deleted",1);
			$emscms->goto_notify("mod-restaurant-menu?rid=$mid");
		}
	} **/
	if(isset($_POST['statusSet'])){
		$featured = (int)$_POST['featured'];
		$publish = $_POST['publish'];
		$sql = "UPDATE property_info SET featured=?, approved=? WHERE prop_id=?";
		if($result =  $emscms->connection->prepare($sql)){
		    
		    
		    
		    if($publish == "yes") {
		        //Sending the user a accepted email
    			$to = $u_email; 
    			$subject = "GoHomeNG Property Approval Status";
    			
    			
    			
    			$message = '<!doctype html>';
                $message .= '<html lang="en">';
                  $message .= '<head>';
                    $message .= '<!-- Required meta tags -->';
                    $message .= '<meta charset="utf-8">';
                    $message .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
                
                    $message .= '<title>Hello, world!</title>';
                    $message .= '<style type="text/css">';
                      $message .= '.contain{';
                        $message .= 'max-width: 80%;';
                        $message .= 'margin: auto;';
                        $message .= 'color: white;';
                      $message .= '}';
                    $message .= '</style>';
                  $message .= '</head>';
                  $message .= '<div style="background-color: rgba(220,220,220, );">';
                    $message .= '<div class="contain">';
                      $message .= '<div class="" style="background: #90EE90; padding: 40px 0px ">';
                        $message .= '<img style="display: block; margin: auto;" src="https://www.gohome.ng/assets/images/logo/logo-lights.png">';
                      $message .= '</div>';
                      $message .= '<div style="color: black; padding: 30px 0px;">';
                        $message .= '<div class="" style="text-align: center;">';
                          $message .= '<h2 style="text-align: center;">confirmation Message</h2>';
                          $message .= '<p>You property as been approved, please login to your GoHome dashboard to manage your properties.</p>';
                          $message .= '<br>';
                        $message .= '</div>';
                      $message .= '</div>';
                
                      $message .= '<div style="text-align: center; background-color: black; padding: 20px">';
                        $message .= '<img src="https://www.gohome.ng/assets/images/logo/logo-lights.png" width="70px">';
                        $message .= '<p>30 UST Road, Port Harcourt, Rivers State 10005.</p>';
                        $message .= '<p>+2347010383498</p>';
                        $message .= '<p>contact@gohome.ng</p>';
                      $message .= '</div>';
                      
                      
                    $message .= '</div>';
                  $message .= '</div>';
                  $message .= '</body>';
                $message .= '</html>';
                
                
    // 			$message = "You property as been approved, please login to your GoHome dashboard to manage your properties";
    			$headers  = "MIME-Version: 1.0\r\n";
    			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    			$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
    			$headers .= "Reply-To: info@gohome.ng\r\n";
    			
    			mail($to, $subject, $message, $headers);
		    } else {
		        //Sending the user a property rejected email
    			$to = $u_email; 
    			$subject = "GoHomeNG Property Approval Status";
    			
    			
    			$message = '<!doctype html>';
                $message .= '<html lang="en">';
                  $message .= '<head>';
                    $message .= '<!-- Required meta tags -->';
                    $message .= '<meta charset="utf-8">';
                    $message .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
                
                    $message .= '<title>Hello, world!</title>';
                    $message .= '<style type="text/css">';
                      $message .= '.contain{';
                        $message .= 'max-width: 80%;';
                        $message .= 'margin: auto;';
                        $message .= 'color: white;';
                      $message .= '}';
                    $message .= '</style>';
                  $message .= '</head>';
                  $message .= '<div style="background-color: rgba(220,220,220, );">';
                    $message .= '<div class="contain">';
                      $message .= '<div class="" style="background: #90EE90; padding: 40px 0px ">';
                        $message .= '<img style="display: block; margin: auto;" src="https://www.gohome.ng/assets/images/logo/logo-lights.png">';
                      $message .= '</div>';
                      $message .= '<div style="color: black; padding: 30px 0px;">';
                        $message .= '<div class="" style="text-align: center;">';
                          $message .= '<h2 style="text-align: center;">confirmation Message</h2>';
                          $message .= '<p>You property as been rejected, please login to your GoHome dashboard to manage your properties.</p>';
                          $message .= '<br>';
                        $message .= '</div>';
                      $message .= '</div>';
                
                      $message .= '<div style="text-align: center; background-color: black; padding: 20px">';
                        $message .= '<img src="https://www.gohome.ng/assets/images/logo/logo-lights.png" width="70px">';
                        $message .= '<p>30 UST Road, Port Harcourt, Rivers State 10005.</p>';
                        $message .= '<p>+2347010383498</p>';
                        $message .= '<p>contact@gohome.ng</p>';
                      $message .= '</div>';
                      
                      
                    $message .= '</div>';
                  $message .= '</div>';
                  $message .= '</body>';
                $message .= '</html>';
                
                
    // 			$message = "You property as been rejected, please login to your GoHome dashboard to manage your properties";
    			$headers  = "MIME-Version: 1.0\r\n";
    			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    			$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
    			$headers .= "Reply-To: info@gohome.ng\r\n";
    			
    			mail($to, $subject, $message, $headers);
		    }
		    
			$result->bind_param('isi', $featured, $publish, $property);
			//$emscms->test_here("$publish - $featured",1);
			$result->execute();
			
			$rowsaffected = $result->affected_rows;
			$emscms->dugoye($emscms->user_id, "Property Status Updated Successful- $property");
			$emscms->goto_notify("property-info?property=$property");
		}
	}
 ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Property Details</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="mod-restuarant-list">Properties</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <div class="container-fluid">
			<div class="row">
                    <div class="col-12">
                        <div class="card">
						<?php echo $emscms->show_server_msg();?>
                            <div class="card-body">
								<div style="margin:0 auto; width:50%; text-align:center;"></div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <tbody>
                                        <?php
											echo $emscms->property_details($property);
										?>
										</tbody>
                                    </table>
                                    <h1><?php echo $u_email; ?></h1>
									<div id="status" style="width:50%; margin: 30px auto; text-align: center;">
									<form action="" method="post">
										<label>Publish Property</label>
										<select name="featured" class='form-control'>
											<option value="<?php echo $featured_status; ?>">--Featured--</option>
											<option value="0">No</option>
											<option value="1">Yes</option>
										</select><br/><br/>
										<select name="publish" class='form-control'>
											<option value="<?php echo $approval_status; ?>">--Approved--</option>
											<option value="no">No</option>
											<option value="yes">Yes</option>
										</select><br/><br/>
										<button type='submit' class='btn btn-primary'  onclick='return submitPost(0)'>Update</button>
										<input type="hidden" name="statusSet" value="1">
									</form>
									</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
 <?php require_once("../commonincs/footer_admin.inc.php");?>
    <script src="../resources/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>
</body>

</html>