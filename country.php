	<?php
		require('includes/header.php');
	?>

	<section id="nav-bottom" class="clearfix">
		<ul>
			<li><a href="countries.php">Countries</a></li>
			<li>\</li>
			<li id="coutryName"></li>
		</ul>
	</section>

	<div class="content">
		<aside>
			<?php
				require('includes/asideNav1.php'); 
			?>
			<?php require('includes/asideNav2.php'); ?>
		</aside>
		
		<section class="main-content">
			<div class="main-content-head section-element">
				<div id="map"></div>
			</div>
			<!-- Demographic information about the countries -->
			<h3 id="dem-h">Demographics</h3>
			<div class="main-content-body section-element" id="demographics">
				<div class="visualization">
					<div class="header-title population">
						<div class="part-1">
							<i class="fa fa-users"></i><b> Population</b>
						</div>

						<div class="part-2">
						</div>
					</div>
					<div id="pop">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization visualization-padding">
					<div class="header-title">
						<div class="part-1">
							<i class="fa fa-users"></i><b> Pop. Density</b></b>
						</div>
						<div class="part-2">
						</div>
					</div>

					<div id="pop-d">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization">
					<div class="header-title gni">
						<div class="part-1">
							<i class="fa fa-users"></i><b> Rural Pop</b>
						</div>

						<div class="part-2">
						</div>
					</div>

					<div id="pop-r">
						<canvas></canvas>
					</div>
				</div>
			</div>
			
			<!-- Financial information about the countries -->
			<div class="clearfix"></div>
			<h3 id="fin-h">Financial</h3>
			<div class="main-content-body section-element" id="financial">
				<div class="visualization">
					<div class="header-title population">
						<div class="part-1">
							<i class="fas fa-chart-line"></i><b> GDP</b>
						</div>

						<div class="part-2">
						</div>
					</div>
					<div id="gdp">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization visualization-padding">
					<div class="header-title">
						<div class="part-1">
							<i class="fas fa-chart-line"></i><b> GDP Deflator</b>
						</div>
						<div class="part-2">
						</div>
					</div>

					<div id="gdp-d">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization">
					<div class="header-title gni">
						<div class="part-1">
							<i class="fas fa-chart-line"></i><b> GDP Per Capita, PPP</b>
						</div>

						<div class="part-2">
						</div>
					</div>

					<div id="gni">
						<canvas></canvas>
					</div>
				</div>
			</div>

			<!-- Number of individuals using the internet -->
			<div class="clearfix"></div>
			<h3 id="dig-h">Digital</h3>
			<div class="main-content-body section-element" id="digital">
				<div class="visualization">
					<div class="header-title population">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> People using the internet</b>
						</div>

						<div class="part-2">
						</div>
					</div>
					<div id="int-u">
						<canvas></canvas>
					</div>
				</div>
	
				<div class="visualization visualization-padding">
					<div class="header-title sub">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> Mobile Subscriptions per 100</b>
						</div>
						<div class="part-2">
						</div>
					</div>

					<div id="sub">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization">
					<div class="header-title pc">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> Communications, computer .. (% exports, BoP)</b>
						</div>

						<div class="part-2">
						</div>
					</div>

					<div id="pc">
						<canvas></canvas>
					</div>
				</div>
				
				<div class="visualization">
					<div class="header-title population serv">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> Secure servers</b>
						</div>

						<div class="part-2">
						</div>
					</div>
					<div id="serv">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization visualization-padding">
					<div class="header-title">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> Fixed Broadband</b>
						</div>
						<div class="part-2">
						</div>
					</div>

					<div id="brd">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization">
					<div class="header-title gni">
						<div class="part-1">
							<i class="fas fa-chart-bar"></i><b> Mobile Cellular Subscriptions</b>
						</div>

						<div class="part-2">
						</div>
					</div>

					<div id="mob">
						<canvas></canvas>
					</div>
				</div>
			</div>
		</section>
		

		<div class="clearfix"></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	<script>
		// Initialize and add the map
		function initMap() {

		    var country;

			<?php if(isset($_GET['country'])){ ?>
					 country = <?php echo (json_encode($_GET['country'])); ?>;
					 country = country.replace('"', "");
					 country = country.replace('"', "");
			<?php } ?>

		  //Fetching population information
		  $.get(' https://restcountries.eu/rest/v2/alpha/'+country, function(data) {
		  }).done(function(data){

		  	  $('#coutryName').text(data.name);

		  	  // The location of Uluru
			  var uluru = {lat: data.latlng[0], lng: data.latlng[1]};
			  // The map, centered at Uluru
			  var map = new google.maps.Map(document.getElementById('map'), {zoom: 3, center: uluru});
			  // The marker, positioned at Uluru
			  var marker = new google.maps.Marker({position: uluru, map: map});
		  });
		}
    </script>

	<script>
		$(document).ready(function() {
			var country;

			<?php if(isset($_GET['country'])){ 

					$_SESSION['country'] = $_GET['country'];
			?>
					 country = <?php echo (json_encode($_GET['country'])); ?>;
					 country = country.replace('"', "");
					 country = country.replace('"', "");

					 console.log(<?php echo (json_encode($_SESSION['country'])); ?>);
			<?php } ?>

			<?php 
			 if(isset($_GET['info']))
				if(strcasecmp($_GET['info'], "all") == 0){
			 ?>
					 demographic_info();
					 financial_info();
					 digital_info();
			<?php 
				} elseif (strcasecmp($_GET['info'], "Digital") == 0) {
			?>
					digital_info();
					$('#demographics').fadeOut();
					$('#financial').fadeOut();
					$('#dem-h').fadeOut();
					$('#fin-h').fadeOut();
			<?php	
				} elseif (strcasecmp($_GET['info'], "Financial") == 0) {
			?>
					financial_info();
					$('#demographics').fadeOut();
					$('#digital').fadeOut();
					$('#dem-h').fadeOut();
					$('#dig-h').fadeOut();
			<?php 
				} elseif (strcasecmp($_GET['info'], "Demographics") == 0) {
			?>
					demographic_info();
					$('#financial').fadeOut();
					$('#digital').fadeOut();
					$('#dig-h').fadeOut();
					$('#fin-h').fadeOut();
			<?php 
				} else {
			?>
					alert("Invalid URL!");
					console.log("Invalid URL!");
			<?php 
				}
			?>

			function demographic_info(){
				$('#demographics').fadeIn();

				//Fetching population information
				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/SP.POP.TOTL?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#pop canvas"), data, "bar", "Population", "#4D82BD");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/EN.POP.DNST?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#pop-d canvas"), data, "bar", "Population density", "#F2C94C");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/SP.RUR.TOTL?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#pop-r canvas"), data, "bar", "Rural Population", "#F2994A");
				});
			}

			function financial_info(){
				$('#financial').fadeIn();

				//Fetching financial information
				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GDP.MKTP.CD?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#gdp canvas"), data, "line", "GDP", "rgba(75,192,192, 0.4)");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GDP.DEFL.KD.ZG?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#gdp-d canvas"), data, "line", "GDP Deflactor", "#F2C94C");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/NY.GDP.PCAP.PP.KD?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#gni canvas"), data, "line", "GDP Per Capita, PPP", "#F2994A");
				});
			}

			function digital_info(){
				$('#digital').fadeIn();

				//Fetching Digital information
				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.USER.ZS?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#int-u canvas"), data, "bar", "Individuals using the internet", "rgba(75,192,192, 0.4)");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.CEL.SETS.P2?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#sub canvas"), data, "line", "M.Cellular Subscriptions(100 people)", "#F2C94C");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/BX.GSR.CMCP.ZS?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#pc canvas"), data, "line", "Communications, computer,(% exports)", "#F2994A");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.SECR.P6?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#serv canvas"), data, "line", "Secure Internet Servers", "rgba(75,192,192, 0.4)");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.BBND.P2?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#brd canvas"), data, "line", "Fixed broadband subscriptions", "#F2C94C");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.CEL.SETS?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#mob canvas"), data, "line", "Mobile cellular subscriptions", "#F2994A");
				});
			}

			function drawGraph(element,data, chartType, chartLabel, pointBorderColor){
				var gdp = [], date = [];

			  	for(var i=data[1].length-1; i >= 0 ; --i){
			  		if(data[1][i].value != null){
			  			gdp.push(data[1][i].value);
			  			date.push(data[1][i].date);
			  		}
			  	}
				
				let lineChart =  new Chart(element, {
					type: chartType,
				    data:{
				    	labels: date,
				    	datasets: [
				    		{
				    			label: chartLabel,
				    			fill: false,
							    lineTension: 0.1,
							    backgroundColor: pointBorderColor,
							    borderColor: pointBorderColor,
							    borderCapStyle: 'butt',
							    borderDash: [],
							    borderDashOffset: 0.0,
							    borderJoinStyle: 'miter',
							    pointBorderColor: pointBorderColor,
							    pointBackgroundColor: "#fff",
							    pointBorderWidth: 5,
							    pointHoverRadius: 1,
							    pointRadius: 1,
							    pointHitRadius: 10,
							    data: gdp,
				    		}
				    	]
				    },
				    options: {
				    	scales: {
				    		yAxes: [{
				    			ticks:{
				    				fontSize: 10,
				    				callback: function(label, index, labels) {
				                        return label/1000000+'m';
				                    }
				    			},
				    			scaleLabel: {
				                    display: true,
				                    labelString: '1m = 1000000',
				                    fontSize: 10,
				                }
				    		}]
				    	}
				    }
				});
			}
		});
	</script>
	
	<?php require('includes/footer.php') ?>
