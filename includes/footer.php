	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmvWSeWu-g_uQ7TpQBZFspA0KaTnMmdCg&callback=initMap"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script>
		// Initialize and add the map
		$(document).ready(function() {

        	$.get('https://restcountries.eu/rest/v2/all', function (data){
				console.log(data);
				var countries = [];
								
				$.each(data, function(index, val) {
					if(val.name != "Åland Islands" && val.name != "Anguilla"){
						countries.push(val.name);
						
						if($("#search2").length){
				             $("#search2").append('<option value="'+val.alpha3Code.toLowerCase()+'">'+val.name+'</option>').trigger("chosen:updated");
				        }
					}
				});

				alert(countries);

				$( "#search1" ).autocomplete({
			      	source: countries
			    });

			    $( "#search2" ).autocomplete({
			      	source: countries
			    });
			});

			$(function() { //shorthand document.ready function
			    $('#searching-form').on('submit', function(e) { //use on if jQuery 1.7+
			        e.preventDefault();  //prevent form from submitting

			        var data = $("#searching-form :input").serializeArray();

			        $.get('https://restcountries.eu/rest/v2/name/'+data[0].value, function (data){
						console.log(data[0].alpha3Code.toLowerCase());

					}).done(function(data){
						window.location.replace('country.php?country='+data[0].alpha3Code.toLowerCase()+'&info=all');
					});
			    });
			});

			$('#demog').click(function (){
				event.preventDefault();
				<?php $_SESSION["option"] = "demographics"; ?> 
				window.location.href = "country.php?country="+<?php echo json_encode($_SESSION["country"]); ?>+"&info="+<?php echo json_encode($_SESSION["option"]); ?>;
			});

			$('#finan').click(function (){
				event.preventDefault();
				<?php $_SESSION["option"]= "financial"; ?>
				window.location.href = "country.php?country="+<?php echo json_encode($_SESSION["country"]); ?>+"&info="+<?php echo json_encode($_SESSION["option"]); ?>;
			});

			$('#dig').click(function (){
				event.preventDefault();
				<?php $_SESSION["option"]= "digital"; ?>
				window.location.href = "country.php?country="+<?php echo json_encode($_SESSION["country"]); ?>+"&info="+<?php echo json_encode($_SESSION["option"]); ?>;
			});

			$('#all').click(function (){
				event.preventDefault();
				<?php $_SESSION["option"]= "all"; ?>
				window.location.href = "country.php?country="+<?php echo json_encode($_SESSION["country"]); ?>+"&info="+<?php echo json_encode($_SESSION["option"]); ?>;
			});
		});
    </script>

    <script>
    	
    </script>
	
	<footer>
	  	<p>Copyright @ all rights reserved</p>
	</footer>
	</body>
</html>