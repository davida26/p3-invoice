$(document).ready(function(){

	$('.deleteClient').on('click', function(e){
		e.preventDefault();
		var id = $(this).parent().parent().attr('id');
		swal({
		  title: "Are you sure?",
		  text: "This will permanently delete this client",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		  	deleteItem('clients', id );
		    swal("Client Deleted!", {
		      icon: "success",
		    });
		  } else {
		    swal("No Changes Made");
		  }
		});
	});
});

function deleteItem(name, id){
	$.ajax({
		url: '/' + name + '/' + id,
		data: {
			"_token" : $('meta[name="csrf-token"]').attr('content')
		},
		type: 'DELETE',
		success: function(result) {
			$('#'+id).remove();
			console.log('record deleted');
		}
	});
}