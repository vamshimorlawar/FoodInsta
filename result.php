<?php 	
	include "header.php";
	include "connection.php"
?>
<?php
	
	
	if(isset($_POST['submits'])){
		$value = $_POST['bld'];
	}

	if($value == 11)
	{
		$sql = 'SELECT * FROM breakfast ORDER BY RAND() LIMIT 1;';
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	
		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='resulc'>
				<h2>Most important meal of the day <i class='fa fa-utensils'></i></h2>
				<div class = 'resultc-container'>
				<i class='fa fa-hotel'></i>  Name  <span id='name'> : ".$row['Name']."</span><br><br><i class='fa fa-hand-holding-usd'></i>  Price<span id='averageprice'> : ".$row['Price']."</span><br><br></span> 
				</div>
				</div>
				";
			}
		}
	}


	if($value == 12)
	{
		$sql = 'SELECT * FROM dishes ORDER BY RAND() LIMIT 1;';
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	
		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='resulc'>
				<h2>Eat healthy Stay healthy <i class='fa fa-utensils'></i></h2>
				<div class = 'resultc-container'>
				<i class='fa fa-hamburger'></i>  Name  <span id='name1'> : ".$row['Name']."</span><br><br><i class='fa fa-search-location'></i>  Restaurant  <span id='location1'> : ".$row['Restaurant']."</span><br><br><i class='fa fa-hand-holding-usd'></i>  Price<span id='averageprice1'> : ".$row['Price']."</span> 
				</div>
				</div>
				";
			}
		}
	}


	if($value == 13)
	{
		$sql = 'SELECT * FROM dishes ORDER BY RAND() LIMIT 1;';
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	
		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='resulc'>
				<h2>Eat good & Sleep sound <i class='fa fa-utensils'></i></h2>
				<div class = 'resultc-container'>
				<i class='fa fa-hamburger'></i>  Name  <span id='name1'> : ".$row['Name']."</span><br><br><i class='fa fa-search-location'></i>  Restaurant  <span id='location1'> : ".$row['Restaurant']."</span><br><br><i class='fa fa-hand-holding-usd'></i>  Price<span id='averageprice1'> : ".$row['Price']."</span> 
				</div>
				</div>
				";
			}
		}
	}
?>
	<div class="button-container">
 	 <a href="choice.php"><button class="button">Wanna choose by another Method ?</button></a>
	</div>