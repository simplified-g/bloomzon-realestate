<?php require_once("../commonincs/header_admin.inc.php");
	$reply = $emscms->show_server_msg();
if(isset($_GET['lockid'])){
	$lockid = (int)$_GET['lockid'];
	$action = (int)$_GET['action'];
	$lockstate = $action==1?"Locked":"Unlocked";
	$lockstat = $action==1?"Lock":"Unlock";
	$status = "";
	if($lockid > 0){
	$result = $emscms->update_this_data("posts","islocked",$action,"id",$lockid);
		$reply = $result > 0 ?$emscms->just_notify("Post Successfully $lockstate: $result"):$emscms->just_notify("Error! Could Not $lockstat Post, Please Retry Later: $result",2);
		$emscms->dugoye($emscms->user_id, "$lockstate a post with ID: $lockid");	
		}
	}
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lock / unlock Posts</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Lock Posts</li>
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
                                <h4 class="card-title">Lock Posts </h4>
                                <h6 class="card-subtitle">Click the action button to Lock / Unlock Posts</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php echo $emscms->list_posts(2);?>
										</tbody>
                                    </table>
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