	<?php 
		$_SESSION["country"] = 'ao';

		require('includes/header.php'); 
	?>
	
	<section id="nav-bottom" class="clearfix">
		<ul>
			<li><a href="countries.php">Countries</a></li>
			<li>\</li>
			<li id="coutryName">Angola</li>
		</ul>
	</section>

	<div class="content">
		<aside>
			<?php require('includes/asideNav1.php'); ?>
			<?php require('includes/asideNav2.php'); ?>
		</aside>
		
		<section class="main-content">
			<div class="main-content-head">
				<div class="visualization">
					<div class="header-title population">
						<div class="part-1">
							<i class="fa fa-users"></i><b> Total Population</b>
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
							<i class="fa fa-dollar-sign"></i><b> GDP</b>
						</div>
						<div class="part-2">
						</div>
					</div>

					<div id="gdp">
						<canvas></canvas>
					</div>
				</div>

				<div class="visualization">
					<div class="header-title gni">
						<div class="part-1">
							<i class="fa fa-dollar-sign"></i><b> GDP Per Capita</b>
						</div>

						<div class="part-2">
						</div>
					</div>

					<div id="gni">
						<canvas></canvas>
					</div>
				</div>
			</div>

			<div class="main-content-body">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21348368.14929924!2d10.2227532!3d-12.118316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f24ecaad8b27%3A0x590a289d0d4a4e3d!2sAngola!5e1!3m2!1sen!2smu!4v1551982219434" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen>
				</iframe>
			</div>

			<div id="main-content-footer">
				<h3>Mauritius</h3>		
				<p>
					Mauritius, an Indian Ocean island nation, is known for its beaches, lagoons and reefs. The mountainous interior includes Black River Gorges National Park, with rainforests, waterfalls, hiking trails and wildlife like the flying fox. Capital Port Louis has sites such as the Champs de Mars horse track, Eureka plantation house and 18th-century Sir Seewoosagur Ramgoolam Botanical Gardens.
				</p>

				<button>
					Read more
				</button>
			</div>
		</section>

		<div class="clearfix"></div>
	</div>
	
	<script>

		$.get('https://api.worldbank.org/v2/countries/ao/indicators/SP.POP.TOTL?format=json&date=2010:2018', function(data) {
			/*optional stuff to do after success */
		}).done(function(data){
			drawGraph($("#pop canvas"), data, "bar", "Population", "rgba(75,192,192, 0.4)");
		});

		$.get('https://api.worldbank.org/v2/countries/ao/indicators/NY.GDP.MKTP.CD?format=json&date=2010:2018', function(data) {
			/*optional stuff to do after success */
		}).done(function(data){
			drawGraph($("#gdp canvas"), data, "line", "GDP", "#F2C94C");
		});

		$.get('https://api.worldbank.org/v2/countries/ao/indicators/NY.GDP.PCAP.PP.KD?format=json&date=2010:2018', function(data) {
			/*optional stuff to do after success */
		}).done(function(data){
			drawGraph($("#gni canvas"), data, "line", "GDP Per Capita, PPP", "#F2994A");
		});

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
	</script>
	
	<?php require('includes/footer.php') ?>
