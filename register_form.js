/* This function validates the quote form */
function formvalidation(form) { 
	if (form.name.value == "") {
		alert("Please, enter your Name.");
		form.name.focus();
		return false;
	}
	if (form.email.value == "") {
		alert("Please, enter your E-mail.");
		form.email.focus();
		return false;
	}
	if (form.phone.value == "") {
		alert("Please, enter your Phone.");
		form.phone.focus();
		return false;
	}
	if (form.institution.value == "") {
		alert("Please, enter the Institution.");
		form.institution.focus();
		return false;
	}
	if (form.address.value == "") {
		alert("Please, enter your Address.");
		form.address.focus();
		return false;
	}
	if (form.city.value == "") {
		alert("Please, enter your City.");
		form.city.focus();
		return false;
	}
	if (form.state.value == "") {
		alert("Please, enter your State.");
		form.state.focus();
		return false;
	}
	if (form.zip.value == "") {
		alert("Please, enter your Zip.");
		form.zip.focus();
		return false;
	}
	if (form.product_model.value == "") {
		alert("Please, enter the Product Model.");
		form.product_model.focus();
		return false;
	}
	if (form.serial_number.value == "") {
		alert("Please, enter the Serial Number.");
		form.serial_number.focus();
		return false;
	}
	if (form.date_received.value == "") {
		alert("Please, enter the Date Received.");
		form.date_received.focus();
		return false;
	}	
	if (form.purchased_from.value == "") {
		alert("Please, complete the Purchased From field.");
		form.purchased_from.focus();
		return false;
	}	
	return true;
}

