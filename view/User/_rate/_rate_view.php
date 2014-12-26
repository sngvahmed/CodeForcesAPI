<html> 
	<head> 
		<title> User Info </title> 
		<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
		<table class="table">
        	<thead>
        		<tr>
		    	<?php
		    		error_reporting(0);
		    		session_start();
					$var_value = $_SESSION['ARRAY'];
					
					foreach ($var_value as $data){
						foreach ($data as $key => $value) {
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
					$var_value = $_SESSION['ARRAY'];
					foreach ($var_value as $data){
						echo "<tr>";
						foreach ($data as $key => $value) {
							echo "<td>";
							print_r($value);
							echo "</td>";
						}
						echo "</tr>";
				    }
				?>
				</tr>
			</tbody>
		</table>
		</div>
	</body>
</html>
