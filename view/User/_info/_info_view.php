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
	                <th>Key</th>
	                <th>Value</th>
	            </tr>
        	</thead>
        	<tbody>
		    	<?php
		    		error_reporting(E_ERROR);
		    		session_start();
					$var_value = $_SESSION['ARRAY'];
					$myfile = fopen("/home/sngv/Desktop/user_info.txt", "w");
					foreach ($var_value as $key => $value){
					    echo "<tr><td>";
					    print_r($key);
					    fwrite($myfile, $key);
					    fwrite($myfile, ":");
					    echo "</td><td>";
					    print_r($value);
					    fwrite($myfile, $value);
					    echo "</td></tr>";
					    fwrite($myfile, "\n");
				    }
				    
					fclose($myfile);
				?>
			</tbody>
			</table>
		</div>

	</body>
</html>
