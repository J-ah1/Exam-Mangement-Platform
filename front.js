function test() {
	var testUcid = document.getElementById("user").value;
	var testPass = document.getElementById("pass").value;
	var sendStr = "user=" + testUcid + "&pass=" + testPass;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					//<!-- 1 is instructor; 0 is student; anything else is failure -->
					//<!-- window.location.replace("http://www.w3schools.com"); -->
					console.log("Attempted to send!")
					document.getElementById("words").innerHTML = this.responseText;
			}
	}
	xhttp.open("POST","frontalpha.php",true);
	xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhttp.send(sendStr);
}

/* window.onload = init;

function init(){
	var ucidInput = document.getElementById("user");
	var passInput = document.getElementById("pass");

	ucidInput.addEventListener("keyup", function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
			document.getElementById("submitButton").click();
		}
		
	});
	
	passInput.addEventListener("keyup", function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
			document.getElementById("submitButton").click();
		}
	});
} */