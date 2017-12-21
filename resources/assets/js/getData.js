$('#datepicker input').datepicker({
	todayBtn: "linked"
});

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
			console.log('error retrieving client');
		}
	});
});

$('#service_id').change(function (){
	var value = this .value;
	var source = '/getservice/' + value;
	console.log(source);
	$.ajax(source, {
		success: function(data) {
			var json = JSON.parse(data);
			$('.service-description').html(json['description']);
			$('.service-rate').html(json['sale_price']);
		},
		error: function() {
			console.log('error retrieving service');
		}
	});
});