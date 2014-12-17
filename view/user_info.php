<html> 
	<head> 
		<title> User Info </title> 
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
	    <form action="../server/user_info.php" method="post">
	        <div class="form-group">
	            <label for="inputHandle">Handle</label>
	            <input type="text" class="form-control" name="handle" id="handle" placeholder="handle">
	        </div>
	        <input type="submit">
	    </form>
	</div>
	</body>
</html>
	