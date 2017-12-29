
var serviceArray = [];

$('.service_id').each( function(){
	var source = $(this).data('value');
	serviceArray.push(source);
});

console.log(serviceArray);
getInfo(serviceArray);



function getInfo(value){
	var url = '/getservices/';

	$.ajax(url, {
		success: function(data) {
			var json = JSON.parse(data);
			console.log(data);
			// $('.service_name_' + value).html(json['name']);
			// $('.service_description_' + value).html(json['description']);
			// $('.service_rate_' + value).html(json['sale_price']);
			// // sumLineTotals();
			// // sumFinalTotal();

		},
		error: function() {
			console.log('error retrieving service');
		}
	});
}
