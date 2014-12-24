<html> 
	<head> 
		<title> User rating </title> 
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
	    <form action="../../server/user_status/user_status.php" method="post">
	        <div class="form-group">
	            <label for="inputHandle">Handle</label>
	            <input type="text" class="form-control" name="handle" id="handle" placeholder="handle"><br>
	            <input type="text" class="form-control" name="count" id="count" placeholder="count"><br>
	            <input type="text" class="form-control" name="from" id="from" placeholder="from"><br>
	        </div>
	        <input class="btn btn-danger" type="submit">
	    </form>
	</div>
	</body>
</html>
	