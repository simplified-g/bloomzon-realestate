<?php 
require("../../ems-incs/igbe.inc.php");
$con = mysqli_connect($DB_SERVER, $DB_USER, $DB_PWD, $DB_NAME);
if (!$con){
	die('Could not connect: ' . mysqli_error($con));
	}
$func = isset($_GET['f'])?($_GET['f']):"";
$func = isset($_POST['f'])?($_POST['f']):$func;
if($func!=""){
	if(function_exists($func))
	{
	$func();
	}
}

	function get_this_data($targetfield,$fromtable,$sourcefield,$keyword){
	global $con;
	$data = "";
	$sql = "SELECT $targetfield FROM $fromtable WHERE $sourcefield = '$keyword' LIMIT 1";

	if(!$result = mysqli_query($con,$sql))
	{
	die("error!");
	}
	while($row = mysqli_fetch_array($result)){
	$data = ucwords($row[$targetfield]);	
	}
	return $data;
	}
	
	function delete_post(){
		global $con;
		$postid 		= isset($_REQUEST['postid'])?(int)$_REQUEST['postid']:0;
		//$postid 		= (int)$_REQUEST['postid'];

		$sql = "DELETE FROM tbl_products WHERE product_id='$postid'";

		if($result = mysqli_query($con,$sql)){
			$response['status']  = 'success';
			$response['message'] = 'Product Deleted Successfully ...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Unable to delete product ...';
		}
		echo json_encode($response);

	}


function load_media_presets(){
	global $con;
	$mpid = (int)trim($_REQUEST['mpid']);
		$sql = "SELECT * FROM media_presets WHERE id='$mpid' LIMIT 1";
		$result = mysqli_query($con,$sql);
		$i=1;
		while($row = mysqli_fetch_array($result))
		{
		$width = $row['width'];
		$height = $row['height'];
		}
		$preset = "
		<div class='form-group'>
		<input type='number' name='mwidth' id='mwidth' class='form-control form-control-line' min='1' max='3000' placeholder='Width' value='$width' title='Width'> 
		</div>
		<div class='form-group'>
		<input type='number' name='mheight' id='mheight' class='form-control form-control-line' min='1' max='3000' placeholder='Height' value='$height'  title='Height'> 
		</div>
		";
	echo $preset;	
	}//End of load_media_presets function

mysqli_close($con);
?> 