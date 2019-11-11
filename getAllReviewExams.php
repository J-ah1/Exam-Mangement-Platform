<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);

		session_start();

    if (isset($_SESSION['userName'])){
			
			//$url = 'http://afsaccess4.njit.edu/~lta2/CS490/middlebeta.php';
			$url = 'http://afsaccess4.njit.edu/~jl783/cs490/back_reviewExams.php';
			
			$fields = array(
				'student' => urlencode($_SESSION['userName']),
			);

			$fields_string = '';
			foreach($fields as $key=>$value){
				$fields_string .= $key.'='.$value;
			}
			
			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);

			curl_close($ch);

			echo $result;
		}
    else
    {
      echo "userName not set";
    }
?>