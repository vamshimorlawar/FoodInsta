<?php 	
	include "header.php";
	include "connection.php"
?>
<?php
	
	if(isset($_POST['submitc'])){
		$choice = $_POST['choice'];
	}
	
	if($choice == 1)
	{
		$sql = 'SELECT * FROM places ORDER BY RAND() LIMIT 1;';
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	
		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='resulc'>
				<h2>You can go here to eat <i class='fa fa-utensils'></i></h2>
				<div class = 'resultc-container'>
				<i class='fa fa-hotel'></i>  Name  <span id='name'> : ".$row['Name']."</span><br><br><i class='fa fa-search-location'></i>  Location<span id='location'> : ".$row['Location']."</span><br><br><i class='fa fa-hand-holding-usd'></i>  AveragePrice<span id='averageprice'> : ".$row['AveragePrice']."</span><br><br><i class='fa fa-star-half-alt'></i>  Rating<span id='rating'> : ".$row['Rating']."</span> 
				</div>
				</div>
				";
			}
		}
	}

	if($choice == 2)
	{
		$sql = 'SELECT * FROM dishes ORDER BY RAND() LIMIT 1;';
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	
		if($resultcheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='resulc'>
				<h2>You can eat this dish today <i class='fa fa-utensils'></i></h2>
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
  <a href="select.php"><button class="button">Wanna choose by another Method ?</button></a>
</div>