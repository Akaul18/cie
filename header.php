<?php
	session_start();
	if(isset($_SESSION['type'])){
		if($_SESSION['type'] === 'investor'){
			header("location: ../investor/ideas.php",true); 
		}else if($_SESSION['type'] === 'vent'){
		header("location: ../ventures/ideas.php",true); 
		}else{
			header("location: ../students/dashboard.php",true); 
		}
	}
	require_once("../includes/connection.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DAV startup's | CIE</title>
 
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href="../css/lightbox.css" rel="stylesheet">
	<!-- <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../js/functions2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/lightbox.min.js"></script>

<style type="text/css">

</style>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:#212A3F;margin-bottom:0px;border-radius:0px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle btn btn-default" style="background-color:#ededed;" data-toggle="collapse" data-target="#myNavbar">
       	 <span class="glyphicon glyphicon-align-justify"></span>
      </button>
      <a class="navbar-brand logo"  style="height:35px;" href="../index/index.php">
          <img class="img-responsive logoimg" style="height:35px;width:auto;overflow:hidden;" src="../images/daviet3.png"/>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="../index/index.php" id="decor" class="page-scroll active"><strong>Home</strong></a></li>
                <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" id="decorAbout" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>About Us</strong> <span class="caret"></span></a>
                  <ul class="dropdown-menu decor2" style="background-color: #fff;">
                  <li><a href="http://www.davcmc.net.in/" style="background-color: #fff;" target="_blank"><strong>DAV CMC</strong></a></li>
                  <li><a href="http://davietjal.org/" style="background-color: #fff;" target="_blank"><strong>DAVIET</strong></a></li>
                  </ul>
                </li>
                <li><a href="../investor/signUp.php" id="decor"><strong>Investors</strong></a></li>
                <li><a href="../ventures/signUp.php" id="decor" ><strong>Venture Capitalists</strong></a></li>
                <li><a href="../students/signUp.php" id="decor"><strong>Entrepreneurs</strong></a></li>
                <li><a type="button" id="decor" data-toggle="modal" data-target="#myModal" style="cursor:pointer;"><strong>Login</strong></a></li>
                <li><a id="decor" href="../index/successStories.php"><strong>Success Stories</strong></a></li>
                <li><a id="decor" href="../index/index.php#section4" class="page-scroll"><strong>Contact Us</strong></a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="myModal" class="modal fade" role="dialog" style="margin-top:100px;">
	<div class="modal-dialog modal-md">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Login (Entrepreneur / Investors / Venture Capitalists)</h4>
	      	</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" tabindex="1" class="form-control" id="loginEmail" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<label for="pwd" class="pull-right"><a href="../ajaxFiles/forgotPassword.php">Forgot password?</a></label>
					<input type="password" tabindex="2" class="form-control" id="loginPassword" placeholder="Enter Password">
				</div>
				Don't have an account? Register (<a href="../students/signUp.php">Entrepreneur</a> / <a href="../investor/signUp.php">Investors </a>/ <a href="../ventures/signUp.php">Venture Capitalists</a>)
				
				<button tabindex="3" name="loginButton" class="btn pull-right" style="background-color:#212A3F;color:#eee;" onclick="loginAll()">Login</button>
				<br/><br/>
			</div>
		</div>

	</div>
</div>