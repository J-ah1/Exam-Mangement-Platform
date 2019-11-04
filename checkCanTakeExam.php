<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);
	
    session_start();
		if(!isset($_SESSION['examTakingID'])){
			echo "rejected";
		}else{
			echo "allowed";
		}
		
?>