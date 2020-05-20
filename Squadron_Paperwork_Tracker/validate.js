function checkForm() {
	var valid = true;
	valid = valid && document.getElementById("form10").checkValidity();
	const cName = document.getElementById("cadetName").value;

	if (!checkName(cName)){
		alert("Problem with characters in Cadet Lastname\n");
		valid = false;
	}
	return valid;
}

function checkName(input){
	var letters = /^[A-Za-z\s-]+$/;
	if(input.trim() == ""){
		return false;
	}
	if(input.match(letters)){
		if(input.length < 51){
			return true;
		}
	}
	else {
		return false;
	}
}

function checkFormData() {
	var valid = true;
	valid = valid && document.getElementById("form10").checkValidity();
	const check = document.getElementById("search").value;

	if (!checkSearch(check)){
		alert("Problem with characters Search\n");
		valid = false;
	}
	return valid;
}

function checkSearch(input){
	var letters = /^[0-9A-Za-z\s-]+$/;
	if(input.trim() == ""){
		return false;
	}
	if(input.match(letters)){
		if(input.length < 51){
			return true;
		}
	}
	else {
		return false;
	}
}
