<ul class="navleft">
  <li class="navleft-item">Statistics</li>
  
  <li class="navleft-item"><a  
  	<?php 
		if(isset($_GET["info"])){
				if($_GET["info"] == "demographics"){ 
					echo 'style="color: blue;';
				} 
		}
		?> id="demog" style="cursor: pointer"><i class="fa fa-users" style="color: #4D82BD">  </i>  Demographics</a>
	</li>

  <li class="navleft-item"><a  
  	<?php 
			if(isset($_GET["info"])){
					if($_GET["info"] == "financial"){ 
						echo 'style="color: blue;';
					} 
			}
		?> id="finan" style="cursor: pointer"><i class="fas fa-chart-line" style="color: #219653">  </i>  Financial</a>
	</li>

  <li class="navleft-item"><a
		<?php 
			if(isset($_GET["info"])){
					if($_GET["info"] == "digital"){ 
						echo 'style="color: blue;';
					} 
			}
		?>
  	
  	id="dig" style="cursor: pointer"><i class="fas fa-chart-bar" style="color: #EB5757"></i>  Digital</a>
	</li>

  <li class="navleft-item"><a href="compare.php"

<?php 
	
	$array = explode('/', $_SERVER['REQUEST_URI']);
	$length = count($array);

	if($array[$length-1] == "compare.php"){
			echo 'style="color: blue;';
	}

?>
		id="comp" style="cursor: pointer"><i class="fas fa-cog" style="color: #F2994A">  </i>  Compare</a></li>

  <li class="navleft-item"><a  
  	<?php 
			if(isset($_GET["info"])){
					if($_GET["info"] == "all"){ 
						echo 'style="color: blue;';
					} 
			}
		?> id="all" style="cursor: pointer"><i class="fas fa-check-double" style="color: ">  </i>  All</a></li>
</ul>