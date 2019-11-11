<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
		ini_set('display_errors' , 1);

    if (true){
			
			//$url = 'http://afsaccess4.njit.edu/~lta2/CS490/middlebeta.php';
			$url = 'http://afsaccess4.njit.edu/~jl783/cs490/back_examCreate.php';
			
			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);

			curl_close($ch);

			echo $result;
			
		}
    else
    {
      echo "invalid_form";
    }
?>