<html>
	<head>
		<meta name="author" content="Ticio Victoriano">
		<meta name="description" content="Data statistic website">
		<meta charset="UTF-8">
		<meta name="description" content="Free web tutorials">
		<meta name="keywords" content="HTML, CSS, XML and Javascript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

		<link rel="stylesheet" href="css/responsive-design.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<title>Data statistic website</title>
	</head>
	
	<body>
		<header>
			<?php 
					session_start(); 
					if(!isset($_SESSION["country"])){
						$_SESSION["country"] = 'mu';
					}
			?>
			<nav>
		    	<div class="left">
		    		<img src="img/logo1.png" width="50px" alt="logo">	
		    	</div>
				
				<div class="right">
			        <ul id="nav-links">
			            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
			            <li><a href="countries.php"><i class="fas fa-map"></i> Countries</a></li>
			        </ul>
		        </div>
			</nav>
			
			<div class="bg-image">
				<div id="welcome">
					<h1>Welcome to Dig-center.</h1>
					<h2>The center of digital infrastructure development data of the world</h2>
		        	
					<div id="search-bar">
		                <form class="form-inline" id="searching-form" action="country.php" method="get" accept-charset="utf-8">
		                    <div class="search-item search">
		                        <input id="search1" type="text" class="form-item" name="search" autocomplete="off" placeholder="Search Country">
		                        <button type="submit" class="btn btn-default">
		                            <i class="fa fa-search"></i>
		                        </button>        
		                    </div>
		                </form>
		            </div>
		        </div>
			</div>
		</header>