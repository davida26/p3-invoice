// Calendar picker - controller handles formatting
$('#datepicker input').datepicker({
	todayBtn: "linked"
});

// Get the client id and load its data into invoice edit
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

// get the line total and sum it up
function sumLineTotals(){
	var getQuantity = $('#quantity_1').val();
	var getRate = $('#rate_1').html();
	var lineTotal = getQuantity * parseFloat(getRate);
	$('#line_total_1').html(lineTotal.toFixed(2));
}

//  get all line totals push them into an array and sum the values
function sumFinalTotal(){
	var valuesArray = [];
	$('.line-total').each( function(){
		valuesArray.push(parseFloat($(this).html()));
	});
	for(var i=0; i<valuesArray.length; i++){
		var sum =+ valuesArray[i];
	}
	$('#invoice_total').val(sum.toFixed(2));
}

sumLineTotals();
sumFinalTotal();

// when qty changes recalculate totals
$('#quantity_1').change(function (){
	sumLineTotals();
	sumFinalTotal();
})

$('#service_id').change(function (){
	var value = this .value;
	var source = '/getservice/' + value;
	console.log(source);
	$.ajax(source, {
		success: function(data) {
			var json = JSON.parse(data);
			$('.service-description').html(json['description']);
			$('.service-rate').html(json['sale_price']);
			sumLineTotals();
			sumFinalTotal();

		},
		error: function() {
			console.log('error retrieving service');
		}
	});
});