<?php
	include "connection.php";
	include "header.php";
?>
<div class="selec-container">
	<h2>What would you like to do ?</h2>
<div class="select-container">
	<form class="bld" action="result.php" method="POST">
		<label class="labels">Breakfast <input type="checkbox" name="bld" value="11" class="only-one"><span class="checkmark"></span></label>
		<label class="labels">Lunch <input type="checkbox" name="bld" value="12" class="only-one" checked><span class="checkmark" ></span></label>
		<label class="labels">Dinner <input type="checkbox" name="bld" value="13" class="only-one"><span class="checkmark"></span></label>
		
		<script type="text/javascript">
		    $('.only-one').on('change', function() {
		        $('.only-one').not(this).prop('checked', false);  
		    });
		 </script>

		<label class="labels"><i  class = "fas fa-arrow-alt-circle-right" "></i><input type="submit" name="submits"></label>
	</form>
</div>
</div>
</body>
 </html>