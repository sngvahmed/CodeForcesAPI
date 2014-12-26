
	 <?php
	 	$handle = $_POST["handle"];
		$service_url = 'http://codeforces.com/api/problemset.recentStatus?count=';
		$service_url = $service_url.$handle;
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		if ($curl_response === false) {
		    $info = curl_getinfo($curl);
		    curl_close($curl);
		    die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		error_reporting(E_ERROR);

		$myfile = fopen("/home/sngv/Desktop/recentStatus.txt", "w");

		fwrite($myfile, $curl_response);
		fclose($myfile);
	    header("Location: ../../../home.html");
	?>

