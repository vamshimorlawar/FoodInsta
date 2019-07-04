<!DOCTYPE html>
<html>
<head>
	<title>Food Suggestion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<nav>
	   <img  class='logo' src="Images/Logo.png" alt="FoodInsta by Vamshikiran" >
		<ul>
			<a href="index.php"><li><i class="fa fa-home"></i></li></a>
			<a href="choice.php"><li><i class="fas fa-map-marked-alt"></i></li></a>
			<a href="select.php"><li><i class="fas fa-pizza-slice"></i></li></a>
		</ul>
		<script>
			$(document).ready(function(){
			  $(".logo").mouseover(function(){
			    $(".logo").css(alert('FoodInsta by Vamshikiran'));
			  });
			});
		</script>
	</nav>