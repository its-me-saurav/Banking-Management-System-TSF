<!DOCTYPE html>
<html>
<head>
	<title>home page</title>

	<?php include 'connection.php'?>
	<?php include 'links.php'?>
	<?php include 'navbar.php'?>

	<link rel="stylesheet" href="CSS/index.css">
</head>
<body>

  <div class="container">
  	<div class="row">
  		<div class="col-sm-6 banner-info">
  			<h1> WELCOME TO <br><span> The Sparks Foundation Bank </span><br></h1>
			  <h2>
            Easiest Way to
            <span id="sp" class="font-weight-bold">Transfer Money</span>
          </h2>
          <p class="lead muted">
            <b>TRANSFER MONEY</b>
            <span id="sp" class="font-weight-bold">IN SECONDS</span>
          </p>

  			<a href="users.php" class="btn btn-first"> View Customers</a>
  			<a href="history.php" class="btn btn-second"> Transfer History</a>
  		</div>
  		<div class="col-sm-6 banner-image">
  			<img src="Images/bk.png" class="img-fluid">
  			
  		</div>
  		
  	</div>
  </div>

  <!--===== ABOUT =====-->
  <section class="about section" id="about">
      <h2
        class="section-title"
        style="color:chocolate; font:italic; background-color:#3333; text-align: center"
      >
        ABOUT US
      </h2>
	  <div class="container">
  	<div class="row">
  		<div class="col-sm-6 banner-info">
		  <h2 style = margin-top:70px;color:purple>
            The Sparks Foundation Bank
          </h2>

           <p class="about__text"></p>

          <p class="about__text">Always here for Service!</p>

          <p class="about__text">
            We provide transfer, accept deposits and best results!
            </p>
          <p class="about__text">EASY TRANSACTION IN ONE STEP!</p>
  		</div>
  		<div class="col-sm-6 banner-image">
  			<img src="Images/about.png" class="img-fluid">
  			
  		</div>
  		
  	</div>
  </div>   
    </section>
  	
  <div class="footer">
  	<h5> © 2021 Copyright, SAURAV KUMAR </h5>

	  <a href="https://www.facebook.com/people/Saurav-Kumar/100004766701571/"> <i class="fa fa-1.5x fa-facebook"></i></a>
  	<a href="https://twitter.com/SauravK29121606?s=08"> <i class="fa fa-1.5x fa-twitter"></i></a>
  	<a href="https://www.instagram.com/invites/contact/?i=z8iffk3vc3qi&utm_content=1no0lpe"> <i class="fa fa-1.5x fa-instagram"></i></a>
  	<a href="https://www.linkedin.com/in/saurav-kumar-66974a195" target="_blank"> <i class="fa fa-1.5x fa-linkedin"></i></a>
  	
  </div>

</body>
</html>