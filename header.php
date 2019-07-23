<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

	<head>
		<title>Gadget Bee</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">		
	</head>

	<body>
	<?php include("config/config.php"); ?>
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href="index.php"><h1><span>Gadget</span> Bee</h1></a>
					</div>
					<!-- <div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div> -->
				</div>
				<!-- menu start -->
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="index.php">Home</a></li>
							<li id="dropdown"><a href="">Brand</a>
								<ul>
									<li>
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='samsung' order by mp.id desc ");
					?>
					<a href="category_post.php?cat=samsung">Samsung</a>
									</li>
									<li>
					<?php 
					$sel_q2 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='microsoft' order by mp.id desc ");
					?>
					<a href="category_post.php?cat=microsoft">Microsoft</a>
									</li>
									<li>
					<?php 
					$sel_q3 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='apple' order by mp.id desc ");
					?>
					<a href="category_post.php?cat=apple">Apple</a>
									</li>
									<li>
					<?php 
					$sel_q4 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='motorola' order by mp.id desc ");
					?>
					<a href="category_post.php?cat=motorola">Motorola</a>
									</li>
											</li>
									<li>
					<?php 
					$sel_q5 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='OnePlus' order by mp.id desc ");
					?>
					<a href="category_post.php?cat=OnePlus">OnePlus</a>
									</li>
								</ul>
							</li>
							<li><a href="about.php">About us</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</nav>
				</div>
				<!-- menu end -->
			</div>
		</section>
