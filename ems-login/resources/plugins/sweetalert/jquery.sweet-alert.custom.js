	$(document).ready(function(){
		
		//readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delid', function(e){
			
			var postId = $(this).data('id');
			SwalDelete(postId);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(postId){
		swal({
			title: 'Are you sure?',
			text: "It will be deleted permanently!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			showLoaderOnConfirm: true,

			preConfirm: function() {
			  return new Promise(function(resolve) {
			     $.ajax({
			   		url: '../../../commonincs/ajaxlibx.php',
			    	type: 'POST',
			       	data: 'f=delete_post&delete='+postId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Deleted!', response.message, response.status);
					//readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Something went wrong with ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-products').load('read.php');	
	}