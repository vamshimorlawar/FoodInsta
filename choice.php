<?php 	
	include "header.php";
	include "connection.php"
?>

<div class="choic-container">
<h2>Want me to suggest a ________ </h2>
<div class="choice-container">
	<form class="choice" action="resultc.php" method="POST">
		<label class="labels">PLACE <input type="checkbox" name="choice" value="1"><span class="checkmark"></span></label>
		<label class="labels">DISH <input type="checkbox" name="choice" value="2" checked><span class="checkmark"></span></label>

		<script>
		$(document).ready(function(){
		    $('input:checkbox').click(function() {
		        $('input:checkbox').not(this).prop('checked', false);
		    });
		});
		</script>

		<label class="labels"><i  class = "fas fa-arrow-alt-circle-right" "></i><input type="submit" name="submitc"></label>
	</form>
</div>
</div>
</body>
</html>