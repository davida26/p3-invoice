$('#client_id').change(function (){
	var value = this.value;
	var parent = $(this).parent();
	console.log(parent);
});

$('#datepicker input').datepicker({
    todayBtn: "linked"
});