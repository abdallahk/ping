<!doctype html>
<html>
<head>
	<title>Ping a website</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- load bootstrap via CDN -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
	<script src="magic.js"></script> <!-- load our javascript file -->
</head>
<body>
<div class="col-sm-6 col-sm-offset-3">

	<h1>Ping a website</h1>

	<!-- OUR FORM -->
	<form action="process.php" method="POST">
		
		<!-- NAME -->
		<div id="name-group" class="form-group">
			<label for="name">Hostname</label>
			<input type="text" class="form-control" name="name" placeholder="Enter hostname">
			<!-- errors will go here -->
		</div>
		<!-- PING -->
		<div id="ping-group" class="form-group">
			<label for="name">No. of Packets</label>
			<input type="text" class="form-control" name="packets" placeholder="How Many times you want to ping?">
			<!-- errors will go here -->
		</div>
		
		<button type="submit" class="btn btn-success">Ping <span class="fa fa-arrow-right"></span></button>
<br />
	</form>

</div>
</body>
</html>
