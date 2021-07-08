<!DOCTYPE html>
<html>
<head>
	<title>nav page</title>

	<?php include 'connection.php' ?>
	<?php include 'links.php'?>

	<link rel="stylesheet" href="CSS/navbar.css">

</head>
<body>

	<div class="bgimg">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<div class="container">
				<a href="" class="navbar-brand font-weight-bold" id="head">BANKING MANAGEMENT SYSTEM</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse" id="collapsenavbar">
				

				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> <a href="index.php" class="nav-link text-white p-3" id="menu"> Home </a></li> 
					<li class="nav-item"> <a href="#about" class="nav-link text-white p-3" id="menu"> About </a></li> 
					<li class="nav-item"> <a href="users.php" class="nav-link text-white p-3" id="menu"> View Customers </a></li> 
					<li class="nav-item"> <a href="history.php" class="nav-link text-white p-3" id="menu"> Transfer History </a></li> 
				</ul>

					
				</div>

			</div>
		</nav>
	</div>

</body>
</html>