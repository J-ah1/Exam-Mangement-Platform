<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);

    if (isset($_POST['user']) && isset($_POST['pass'])){
			
			session_start();
			
			$url = 'http://afsaccess4.njit.edu/~lta2/CS490/middlebeta.php';
			
			$fields = array(
				'user' => urlencode($_POST['user']),
				'pass' => urlencode($_POST['pass']),
			);

			$fields_string = '';
			foreach($fields as $key=>$value){
				$fields_string .= $key.'='.$value.'&';
			}
			rtrim($fields_string, '&');

			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);

			curl_close($ch);

			$decoded_result = json_decode($result);
			if($decoded_result->back == 0){
			echo "invalid_user";
			}else if($decoded_result->instructor == 1){
				$_SESSION['userName'] = $_POST['user'];
				$_SESSION['userType'] = 'instructor';
				echo "instructor";
			}else if($decoded_result->instructor == 0){
				$_SESSION['userName'] = $_POST['user'];
				$_SESSION['userType'] = 'student';
				echo "student";
			}else{
				echo "error";
			}			
			
		}
    else
    {
      echo "invalid_form";
    }
?>