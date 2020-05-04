	<?php
		require('includes/header.php');
	?>

	<section id="nav-bottom" class="clearfix">
		<ul>
			<li><a href="countries.php">Countries</a></li>
		</ul>
	</section>

	<div class="content">
		<aside>
			<?php
				require('includes/asideNav1.php');
				require('includes/asideNav2.php');
			?>
		</aside>

		<section class="main-content">
			
			<div class="main-content-head">
				<div id="date-item">
					<label for="">
						<b>Date range:</b> 
					</label>
					<select name="" class="select" id="date1">
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2016</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010" selected>2010</option>
						<option value="2011">2011</option>
						<option value="2011">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
					</select>

					<select name="" class="select" id="date2">
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2016</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2011">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018" selected>2018</option>
					</select>
				</div>
				<div class="search-item search head-item">
                    <select data-placeholder="Choose countries..." id="search2" class="input-element chosen-select" multiple name="search">
                    	<option value=""></option>
                    </select>     
                </div>
                <div class="clearfix"></div>
				<hr>
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
		  });
		}
    </script>

	<!-- <script>
		$(document).ready(function() {
			$("#search2").change(function(){
		        var value = $(this).chosen().val();

		        if($('.chosen-container').length > 1){
		            $('.chosen-container').eq(1).remove();  
		        }


		        var dataCountry = [];

		        if(value.length > 1){

		        	dataCountry.push(
		        		$.parseJSON($.ajax({
			                url: 'https://api.worldbank.org/v2/countries/'+value.join(';')+'/indicators/SP.POP.TOTL?format=json&date=2010:2018',
			                dataType: "json", 
			                async: false
			            }).responseText)[1]
			        );

		        	var data = [];
		        	var date = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2017];

		        	$.each(dataCountry[0].sort(function(a, b){return a.date - b.date}), function(index, val) {
		        		 $.each(value, function(ind2, val2) {
		        		 	 if(val.countryiso3code.toLowerCase() == val2){
		        		 	 	if(!data[ind2]){
		        		 	 		data[ind2] = [];
		        		 	 	}

		        		 	 	data[ind2].push(val.value);
		        		 	 }
		        		 });
		        	});

		        }else{
		            // singleCountry(value[0]);
		        }
	    	});
		});
    </script> -->
	
	<script>
		$(document).ready( function() {

			$("#search2").change(function(){
				var value = $(this).chosen().val();

				if($('.chosen-container').length > 1){
				 	$('.chosen-container').eq(1).remove();	
				}

				if(value.length > 1){
					multipleCountry(value);
				}else{
					singleCountry(value[0]);
				}
			});

			$("#date1").change(function(){
				var value = $("#search2").chosen().val();

				if($('.chosen-container').length > 1){
				 	$('.chosen-container').eq(1).remove();	
				}

				if (typeof value !== 'undefined' && value.length > 0) {
					if(value){
						if($('.chosen-container').length > 1){
						 	$('.chosen-container').eq(1).remove();	
						}

						if(value.length > 1){
							multipleCountry(value);
						}else{
							singleCountry(value[0]);
						}
					}
				}
			});

			$("#date2").change(function(){
				var value = $("#search2").chosen().val();

				if($('.chosen-container').length > 1){
				 	$('.chosen-container').eq(1).remove();	
				}

				if (typeof value !== 'undefined' && value.length > 0) {
					if(value){
						if($('.chosen-container').length > 1){
						 	$('.chosen-container').eq(1).remove();	
						}

						if(value.length > 1){
							multipleCountry(value);
						}else{
							singleCountry(value[0]);
						}
					}
				}
			});

			function chartGenerator(){
				
			}

			function singleCountry(country){
				demographic_info(country);
				financial_info(country);
				digital_info(country);
			}

			function multipleCountry(value){
				demographic_info_multi(value);
				financial_info_multi(value);
				digital_info_multi(value);
			}

			function demographic_info_multi(countries){
				$("#pop").empty();
				$("#pop").append('<canvas></canvas>');

				$("#pop-d").empty();
				$("#pop-d").append('<canvas></canvas>');

				$("#pop-r").empty();
				$("#pop-r").append('<canvas></canvas>');

				drawGraphCompare($("#pop canvas"), "bar", "Population", 'SP.POP.TOTL', countries);
				drawGraphCompare($("#pop-d canvas"), "bar", "Population Deflator", 'EN.POP.DNST', countries);
				drawGraphCompare($("#pop-r canvas"), "bar", "Rural Population", 'SP.RUR.TOTL', countries);	
			}

			function financial_info_multi(countries){
				$("#gdp").empty();
				$("#gdp").append('<canvas></canvas>');

				$("#gdp-d").empty();
				$("#gdp-d").append('<canvas></canvas>');

				$("#gni").empty();
				$("#gni").append('<canvas></canvas>');

				drawGraphCompare($("#gdp canvas"), "line", "GDP", 'NY.GDP.MKTP.CD', countries);
				drawGraphCompare($("#gdp-d canvas"), "line", "GDP Deflator", 'NY.GDP.DEFL.KD.ZG', countries);
				drawGraphCompare($("#gni canvas"), "line", "GNI", 'NY.GNP.PCAP.CN', countries);	
			}	

			function digital_info_multi(countries){
				$("#int-u").empty();
				$("#int-u").append('<canvas></canvas>');

				$("#sub").empty();
				$("#sub").append('<canvas></canvas>');

				$("#pc").empty();
				$("#pc").append('<canvas></canvas>');
				
				$("#serv").empty();
				$("#serv").append('<canvas></canvas>');
				
				$("#brd").empty();
				$("#brd").append('<canvas></canvas>');

				$("#mob").empty();
				$("#mob").append('<canvas></canvas>');

				drawGraphCompare($("#int-u canvas"), "bar", "Individuals using the internet", 'IT.NET.USER.ZS', countries);
				drawGraphCompare($("#sub canvas"), "line", "M.Cellular Subscriptions(100 people)", 'IT.CEL.SETS.P2', countries);
				drawGraphCompare($("#pc canvas"), "line", "Communications, computer,(% exports)", 'BX.GSR.CMCP.ZS', countries);
				drawGraphCompare($("#serv canvas"), "line", "Secure Internet Servers", 'IT.NET.SECR.P6', countries);
				drawGraphCompare($("#brd canvas"), "line", "Fixed broadband subscriptions", 'IT.NET.BBND.P2', countries);
				drawGraphCompare($("#mob canvas"), "line", "Mobile cellular subscriptions", 'IT.CEL.SETS', countries);
			}

			function demographic_info(country){
				$("#pop").empty();
				$("#pop").append('<canvas></canvas>');
				
				$("#pop-d").empty();
				$("#pop-d").append('<canvas></canvas>');

				$("#pop-r").empty();
				$("#pop-r").append('<canvas></canvas>');

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

			function financial_info(country){
				$("#gdp").empty();
				$("#gdp").append('<canvas></canvas>');

				$("#gdp-d").empty();
				$("#gdp-d").append('<canvas></canvas>');
				
				$("#gni").empty();
				$("#gni").append('<canvas></canvas>');

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
					drawGraph($("#gni canvas"), data, "line", "GDP per Capita", "#F2994A");
				});
			}

			function digital_info(country){
				$("#int-u").empty();
				$("#int-u").append('<canvas></canvas>');

				$("#sub").empty();
				$("#sub").append('<canvas></canvas>');
				
				$("#pc").empty();
				$("#pc").append('<canvas></canvas>');

				$("#serv").empty();
				$("#serv").append('<canvas></canvas>');

				$("#brd").empty();
				$("#brd").append('<canvas></canvas>');

				$("#mob").empty();
				$("#mob").append('<canvas></canvas>');

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
					drawGraph($("#sub canvas"), data, "line", "Mobile cellular subscriptions", "#F2C94C");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/BX.GSR.CMCP.ZS?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success */
				}).done(function(data){
					drawGraph($("#pc canvas"), data, "line", "Communications, computer,(% exports)", "#F2994A");
				});

				$.get('https://api.worldbank.org/v2/countries/'+country+'/indicators/IT.NET.SECR.P6?format=json&date=2010:2018', function(data) {
					/*optional stuff to do after success*/
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

				return lineChart;
			}

			function drawGraphCompare(element, chartType, chartLabel, indicator, countries){
				var gdp = [[],[]], name = [];
				var date = [];
				var dataCountry = [];

				var date1 = $("#date1 option:selected").text();
				var date2 = $("#date2 option:selected").text();

				if(date1 >= date2){
					for (var i = 0; i <= (date1 - date2); ++i) {
						date.push(parseInt(date2)+i);
					}
				}else{
					for (var i = 0; i <= (date2 - date1); ++i) {
						date.push(parseInt(date1)+i);
					}
				}

				dataCountry.push(
						$.parseJSON($.ajax({
				            url: (date1 >= date2) ? 'https://api.worldbank.org/v2/countries/'+countries.join(';')+'/indicators/'+indicator+'?format=json&date='+date2+':'+date1 : 'https://api.worldbank.org/v2/countries/'+countries.join(';')+'/indicators/'+indicator+'?format=json&date='+date1+':'+date2,
				            dataType: "json", 
				            async: false
				        }).responseText)[1]
				   );

				$.each(dataCountry[0].sort(function(a, b){return a.date - b.date}), function(index, val) {
				   $.each(countries, function(ind2, val2) {
				 	 if(val.countryiso3code.toLowerCase() == val2){
				 	 	if(!gdp[ind2]){
				 	 		gdp[ind2] = [];
				 	 	}
				 	 	name[ind2] = val.country.value;
				 	 	gdp[ind2].push(val.value);
				 	 }
				   });
				});

				var dataset = [];

				for(var i=0; i < gdp.length ; ++i){
					var color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);

					dataset.push({
			    			label: name[i],
			 			fill: false,
						    lineTension: 0.1,
						    backgroundColor: color,
						    borderColor: color,
						    borderCapStyle: 'butt',
						    borderDash: [],
						    borderDashOffset: 0.0,
						    borderJoinStyle: 'miter',
						    pointBorderColor: color,
						    pointBackgroundColor: "#fff",
						    pointBorderWidth: 5,
						    pointHoverRadius: 1,
						    pointRadius: 1,
						    pointHitRadius: 10,
						    data: gdp[i],
				    	}
					);
				}

				let lineChart =  new Chart(element, {
					type: chartType,
				    data:{
				    	labels: date,
				    	datasets: dataset
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  	<script>
  		$(".chosen-select").chosen();
  	</script>
	<?php require('includes/footer.php') ?>