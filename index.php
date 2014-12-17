<html> 
	<head> 
		<title> CodeForces API </title> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script language="JavaScript"> 

			window.onload = function( ){
				var handle = '<?php echo $_POST["handle"]; ?>';
				var url = "http://www.codeforces.com/api/";
				url = url + "user.info?handles=" + handle
			};
		 </script> 
	</head> 
	<body> 
		<h1>Welcome <?php echo $_POST["handle"]; ?></h1>
		<h2>Your email address is: <?php echo $_POST["email"]; ?></h2>


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
			// echo 'response ok!';
			print_r($decoded);
		?>
	</body>
</html>