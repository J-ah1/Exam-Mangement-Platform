<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);

		session_start();

    if (isset($_SESSION['userName']) && isset($_POST['examID'])){
			$_SESSION['reviewStudentID'] = $_SESSION['userName'];
			$_SESSION['reviewExamID'] = $_POST['examID'];
			echo "allow";
		}
    else
    {
      echo "userName OR examID not set";
    }
?>