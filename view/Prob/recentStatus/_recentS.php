<html> 
	<head> 
		<title> Problems </title> 
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
	    <form action="../../../server/Prob/recentStatus/_recentS.php" method="post">
	        <div class="form-group">
	            <label for="inputHandle">Count</label>
	            <input type="text" class="form-control" name="handle" id="handle" placeholder="Count">
	        </div>
	        <input class="btn btn-danger" type="submit">
	    </form>
	</div>
	</body>
</html>
	