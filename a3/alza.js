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
function date(){
	
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
}
$("#only-text").on('keyup', function(e) {
    var val = $(this).val();
   if (val.match(/[^a-zA-Z]/g)) {
       $(this).val(val.replace(/[^a-zA-Z]/g, ''));
   }
});
}