<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);
	
		session_start();
		unset($_SESSION['userName'], $_SESSION['userType']);
		
    if(!session_destroy()){
			echo "Error: Session not destroyed successfully";
		}
		
?>