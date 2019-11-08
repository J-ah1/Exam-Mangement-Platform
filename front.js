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

function Logout(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log(this.responseText);
			if(!this.responseText){
				window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/";
			}
		}
	}
	xhttp.open("POST","front.php",true);
	xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhttp.send();
}

function SetupStartScreen(userType){
	
	var logoutButton = "<button type='button' id='logoutButton' onclick='Logout()'>Logout</button>";
	document.body.innerHTML = logoutButton + "<br>" + document.body.innerHTML;
	
	if(userType == "instructor"){
		
		CheckLogin(userType);
		
		document.getElementById("questionCreateButton").onclick = function () {
			window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/instructor_questionCreate.html";
		};
		document.getElementById("examGradeButton").onclick = function () {
			window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/instructor_examGrade.html";
		};
		
	}else if(userType  == "student"){
		
		CheckLogin(userType);
		
		document.getElementById("takeExamButton").onclick = function () {
			window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/student_takeExam.html";
		};
		document.getElementById("reviewExamButton").onclick = function () {
			window.location.href = "http://afsaccess4.njit.edu/~jaa75/cs490/student_reviewExam.html";
		};
		
	}else{
		console.log("Error: undefined userType on start screen setup");
	}
}

