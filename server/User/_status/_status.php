
	 <?php
	 	$handle = $_POST["handle"];
	 	$count = $_POST["count"];
	 	$from = $_POST["from"];
		$service_url = "http://codeforces.com/api/user.status?handle=";
		$service_url = $service_url.$handle;
		$service_url = $service_url."&from=";
		$service_url = $service_url.$from;
		$service_url = $service_url."&count=";
		$service_url = $service_url.$count;
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

		$data = json_decode($curl_response);
		foreach ($data as $name => $value) {
			$decoded = $value;
		}
	    session_start();
		$_SESSION['ARRAY'] = $decoded;
	    header("Location: ../../../view/User/_status/_status_view.php");
	?>
