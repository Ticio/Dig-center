	<?php require('includes/header.php');?>
	
	<section id="nav-bottom" class="clearfix">
		<ul>
			<li>Countries</li>
		</ul>
	</section>

	<div class="content">
		<div class="main-content-body" id="financial">
			<div id="countryList">
				  <div id="header"><b>Countries</b></div>
				  <ul id="countryListItems">
				  </ul>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>	
		$.get('https://restcountries.eu/rest/v2/all', function (data){
				// console.log(data);

				console.log(data);
				$.each(data, function(index, val) {

					if(val.name != "Åland Islands"){
						if($("#countryListItems #"+val.name.toLowerCase().charAt(0)).length){
							$("#"+val.name.toLowerCase().charAt(0)).append('<a href="country.php?country='+val.alpha3Code.toLowerCase()+'&info=all">'+val.name+'</a>');
						}else{
							$("#countryListItems").append('<li id="'+val.name.toLowerCase().charAt(0)+'"></li>');
							$("#"+val.name.toLowerCase().charAt(0)).append('<h3>'+val.name.toUpperCase().charAt(0)+'</h3><br>');
							$("#"+val.name.toLowerCase().charAt(0)).append('<a href="country.php?country='+val.alpha3Code.toLowerCase()+'&info=all">'+val.name+'</a>');
						}
					}

				});
		});
	</script>

	<?php require('includes/footer.php') ?>
