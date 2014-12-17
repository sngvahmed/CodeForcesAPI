
	 <?php
	 	$handle = $_POST["handle"];
		$service_url = 'http://codeforces.com/api/';
		$service_url = $service_url."user.info?handles=";
		$service_url = $service_url.$handle;
		//next example will recieve all messages for specific conversation
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		if ($curl_response === false) {
		    $info = curl_getinfo($curl);
		    curl_close($curl);
		    die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		$status = "";
		$array = "";
		$count = 1;
		foreach ($decoded as $data){
			if($count == 1){
				$status = $data;
			}else {
				$array = $data;
			}
			$count = $count +1;
	    }
	    session_start();
	    foreach ($array as $data){
		    $_SESSION['ARRAY'] = $data;
	    }
	    header("Location: ../view/user_info_viewing.php");
	?>