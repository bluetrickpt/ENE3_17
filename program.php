<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ENEEE Coimbra 2017</title>
  	<link rel="icon" href="images/logo_32x32.png">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/program.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 
</head>

<body>
	<?php include("analytics/analyticstracking.php"); ?>

	<noscript>
		<div class="noscriptmsg">
			<p>You don't have javascript enabled! This worksite will work poorly without javascript.</p>
		</div>
	</noscript>

	<div id="header"></div>
	<div class="container primary">
		<h1 class="text-primary">Programa</h1>


        <div id="program_table"></div>

    </div>




    <?php include("cp/cp.php"); ?>
	<div id="footer"></div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
	<script>
	$(function(){
		$("#header").load("header.html"); 
		$("#footer").load("footer.html");
		$("#program_table").load("table_program/table.html");
	});
	</script>
</body>
</html>
