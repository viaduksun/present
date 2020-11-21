/*----------------------------
jQuery
------------------------------ */
$( ".shop5" ).change(function() {
	// alert( "Да" );
	var value = $('.select').val();
	// console.log(+ value);
	// $('.select option[value=5]').prop('selected', true);
	// $('.select option[value=10]').prop('selected', false);
	alert( + value );
	// location.reload();


});

function amount () {
	var amount = $('.select').val();
	return amount;
}

