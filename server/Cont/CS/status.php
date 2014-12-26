
 <?php
 	$handle = $_POST["handle"];
 	$count = $_POST["count"];
 	$from = $_POST["from"];
	$service_url = "http://codeforces.com/api/contest.status?contestId=";
	$service_url = $service_url.$handle;
	$service_url = $service_url."&from=";
	$service_url = $service_url.$from;
	$service_url = $service_url."&count=";
	$service_url = $service_url.$count;
	echo $service_url;
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
	error_reporting(E_ERROR);
	// print_r($curl_response);
	$myfile = fopen("/home/sngv/Desktop/ContestStatus.txt", "w");

	fwrite($myfile, $curl_response);
	fclose($myfile);
    header("Location: ../../../home.html");

?>
