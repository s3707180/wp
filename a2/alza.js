function formValidate() {
	var qty = document.getElementById("qty").value;
	if(qty>0){
		document.getElementById("errorMessage").hidden=true;
		return true;
	}
	document.getElementById("errorMessage").hidden=false;
	return false;
}

function plus() {
	var qty = document.getElementById("qty");
	qty.value++;
	document.getElementById("errorMessage").hidden=true;
}

function minus() {
	var qty = document.getElementById("qty");
	if(qty.value>0){		
		qty.value--;
		document.getElementById("errorMessage").hidden=true;
	}
}