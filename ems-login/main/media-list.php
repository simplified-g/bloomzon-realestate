<?php require_once("../commonincs/header_admin.inc.php");
	$reply = $emscms->show_server_msg();
if(isset($_GET['delid'])){
	$delid = (int)$_GET['delid'];
	$status = "";
	if($delid > 0){
	$medianame = $emscms->delete_this_data("title","medias","id",$delid);
	$status = $emscms->delete_this_data("medias","id",$delid);
	$emscms->dugoye($emscms->user_id, "Deleted A Media: $medianame");		

	$reply = $status < 0 ?$emscms->just_notify("Post Successfully Deleted"):$emscms->just_notify("Error! Could Not Delete Post, Please Retry Later.",2);
	}
	}
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Media Gallery  <a href='media-new.php' class='btn btn-primary'><i class='mdi mdi-plus'></i> Add New</a></h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Media</li>
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
						<?php echo $reply;?>
                            <div class="card-body">
                                <h4 class="card-title">Media </h4>
                                <h6 class="card-subtitle">Copy media slug to use in your post</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
 												<th>Thumbnail</th>
												<th>Description</th>
                                                <th>Dimension</th>
												<th>Date Uploaded</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Description</th>
												<th>URL</th>
                                                <th>Dimension</th>
                                                <th>Date Uploaded</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php echo $emscms->show_media_gallery();?>
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
 <?php require_once("../commonincs/footer_admin.inc.php");?>
    <link href="../resources/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <script src="../resources/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../resources/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="../resources/plugins/toast-master/js/toastr.js"></script>
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

    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    $(".dataTables_filter").removeAttr("top");
    
	});
	
function copyImg(thisid){
  /* Get the text field */
  var copyText = document.getElementById('copy'+thisid);
  copyText.select();
  document.execCommand("copy");
}	
	
function copyFullImg(thisid){
  /* Get the text field */
  var copyText = document.getElementById('fullimg'+thisid);
  copyText.select();
  document.execCommand("copy");
}	
	
    </script>
</body>

</html>