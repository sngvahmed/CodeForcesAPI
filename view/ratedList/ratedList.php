<html> 
	<head> 
		<title> User Info </title> 
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
		</script>
	</head> 

	<body> 
		<!-- nav bar -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="/Concept/home.html">API CODEFORCES</a>
			</div>
		</nav>

	<div class = "container">
		<table class="table">	
		<tr>
			<form  method="post">
			<td>
			<div class="checkbox"><label><input type="checkbox" id="check" name="check_list">ActiveOnly</label></div>
			</td>
			<td>
			<input type="submit" name="sub" value="submit" class="btn btn-danger">
			</td>
			</form>
		</tr>
		</table>
		<table class = "table">
		<?php
			error_reporting(0);
			if(isset($_POST['sub'])){			
				if(!empty($_POST['check_list'])) {
					$service_url = 'http://codeforces.com/api/user.ratedList?activeOnly=true';
				}else {
					$service_url = 'http://codeforces.com/api/user.ratedList?activeOnly=false';
				}
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
				$count = 0;
				echo "<thead>";
				foreach ($array as $key => $value){
					echo "<tr>";
  					foreach ($key as $var) {
  						echo "<td>";
  						print_r($var);
  						echo "</td>";
  					}
  					echo "</tr>";
				}
				
				foreach ($array as $key => $value){
					echo "<tr>";
				    if($count == 10)break;
				    foreach ($value as $var) {
				    	echo "<td>";
				    	print_r($var);
				    	echo "</td>";
				    }
				    echo "</td>";
				    $count = $count +1;
			       }
				}
			?>
			</table>
	</div>


	</body>
</html>
	