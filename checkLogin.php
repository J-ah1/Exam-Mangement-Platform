<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);
	
    session_start();
		if(!(isset($_SESSION['userName']) || isset($_SESSION['userType']))){
			echo "User not signed in";
		}else if(!(isset($_POST['reqUserType']))){
			echo "Error: reqUserType not set";
		}else if($_POST['reqUserType'] != $_SESSION['userType']){
			echo "User not allowed on page";
		}else{
			echo "allowed";
		}
		
		
?>