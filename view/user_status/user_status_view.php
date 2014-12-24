<html> 
	<head> 
		<title> User Info </title> 
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head> 

	<body> 
		<!-- nav bar -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="/Concept/home.html">API CODEFORCES</a>
			</div>
		</nav>


		<div class = "container">
		<h1>Table General</h1>
		<table class="table">
        	<thead>
        		<tr>
		    	<?php
		    		error_reporting(0);
		    		session_start();
					$var_value = $_SESSION['ARRAY'];
					
					foreach ($var_value as $data){
						$count = 0;
						foreach ($data as $key => $value) {
							if($key == "problem")continue;
							else if ($key == "author")continue;
							echo "<td>";
							print_r($key);
							echo "</td>";
						}
						break;
				    }
				?>
				</tr>
			</thead>
			<tbody>
				
		    	<?php
		    		error_reporting(0);
		    		session_start();
		    		$prob = array();
		    		$auth = array();
					$var_value = $_SESSION['ARRAY'];
					foreach ($var_value as $data){
						echo "<tr>";
						foreach ($data as $key => $value) {
							if($key == "problem"){array_push($prob,$value); continue;}
							else if ($key == "author"){array_push($auth,$value); continue;}
							echo "<td>";
							print_r($value);
							echo "</td>";
						}
						echo "</tr>";
				    }
				?>
			</tbody>
		</table>

		<h1>Table Problem</h1>
			<table class="table">
        	<thead>
        		<tr>
		    	<?php
		    		error_reporting(0);
					foreach ($prob as $dat) {
						foreach ($dat as $key => $vals) {
							echo "<td>";
							print_r($key);
							echo "</td>";
						}
						break;
					}
				?>
				</tr>
			</thead>
			<tbody>
		    	<?php
		    		error_reporting(0);
					foreach ($prob as $dat) {
						echo "<tr>";
						foreach ($dat as $key => $vals) {
							echo "<td>";
							if($key == "tags"){
								print_r($vals[0]);
							}else {
								print_r($vals);
							}
							echo "</td>";
						}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>

		<h1>Table Author</h1>
			<table class="table">
        	<thead>
        		<tr>
		    	<?php
		    		error_reporting(0);
					foreach ($auth as $dat) {
						foreach ($dat as $key => $vals) {
							echo "<td>";
							print_r($key);
							echo "</td>";
						}
						break;
					}
				?>
				</tr>
			</thead>
			<tbody>
		    	<?php
		    		error_reporting(0);
					foreach ($auth as $dat) {
						echo "<tr>";
						foreach ($dat as $key => $vals) {
							echo "<td>";
							if($key == "members"){
								print_r($vals[0]->handle);
							}else {
								print_r($vals);
							}
							echo "</td>";
						}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		</div>
	</body>
</html>
