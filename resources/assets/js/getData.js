$('#client_id').change(function (){
	var value = this.value;
	var source = '/client/' + value;
	$.ajax(source, {
		success: function(data) {
			var json = JSON.parse(data);
			console.log(json['first_name']);
			$('.client-name').html(json['first_name'] + ' ' + json['last_name']);
			$('.client-address').html(json['address']);
			$('.client-email').html(json['email']);
			$('.client-phone').html(json['phone_number']);
		},
		error: function() {
			console.log('error');
		}
	});
});

$('#datepicker input').datepicker({
	todayBtn: "linked"
});