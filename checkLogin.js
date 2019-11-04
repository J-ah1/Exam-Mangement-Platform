function CheckLogin(userType) {
	var sendStr = "reqUserType=" + userType;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log("Checking if user can view page...");
			console.log(this.responseText);
			if(this.responseText != "allowed"){
				window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/";
			}
		}
	}
	xhttp.open("POST","checkLogin.php",true);
	xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhttp.send(sendStr);
}
