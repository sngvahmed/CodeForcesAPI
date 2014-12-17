<html> 
	<head> 
		<title> CodeForces API </title> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script language="JavaScript"> 
			window.onload = function( ){
				 var handle = '<?php echo $_POST["handle"]; ?>';
				// var email = '<?php echo $_POST["email"]; ?>'; 
				 var url = "http://codeforces.com/api/";
				// var req = new XMLHttpRequest();
				 url = url + "user.info?handles=" + handle
				var req = new XMLHttpRequest();
				req.open("GET" , url , false);
				req.send();
			};
		 </script> 

	</head> 
	<body> 
		<h1>Welcome <?php echo $_POST["handle"]; ?></h1>
		<h2>Your email address is: <?php echo $_POST["email"]; ?></h2>
	</body>
</html>