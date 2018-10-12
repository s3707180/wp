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
	subtotalCalcul();
}

function minus() {
	var qty = document.getElementById("qty");
	if(qty.value>0){
		qty.value--;
		document.getElementById("errorMessage").hidden=true;
		
		subtotalCalcul();
	}
}

function subtotalCalcul(){
	var qty=document.getElementById("qty").value;
	
	var price =document.getElementById("price").innerHTML;
	
	 document.getElementById("subtotal").innerHTML =qty*price;
}

function creditVisaLogoUpdate() {
	var value = document.getElementById('credit').value;
	value = value.replace(/ /g,'');
	var patt = new RegExp("^4[0-9]{12,15}$");
	//var patt = new RegExp("a");
	var res = patt.test(value);
	
	if(res) {
		document.getElementById('visa_logo').style.visibility = "visible";
	}
	else {
		document.getElementById('visa_logo').style.visibility = "hidden";
	}
}