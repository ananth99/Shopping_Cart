//Listing selected products and their total value
var totalAmount = 0;
$(document).on("click",'.products',function(){
	$('#amount:last-child', this).remove();
	if($(this).is(':checked')){ //the user checks a checkbox.
		totalAmount = totalAmount + parseInt($(this).val());	
	}
	else //The user unchecks a checkbox.
		totalAmount = totalAmount - parseInt($(this).val());

	console.log($(this).val());
	console.log("Total amount: " + totalAmount);
	

	$('#amount').html(totalAmount);

});

//Perform front-end validation to check if atleast one checkbox has been ticked.
$('#checkoutForm').submit(function(event){
	var checkedOnce = false;
	$('input[type="checkbox"]').each(function(){
		if($(this).is(':checked')){
			checkedOnce = true;
			$(this).unbind('submit').submit()
		}
	});
	if(!checkedOnce)
		alert('Please select at least one product.');
	event.preventDefault();
});
