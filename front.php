<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);
	
    if(!(session_start() && session_unset() && session_destroy())){
			echo "Error: Session not unset";
		}
		
?>