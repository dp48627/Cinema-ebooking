<?php include('../layouts/header.php'); ?>

<?php
	$query = "SELECT * FROM tickettype";
	$test = $db->query($query);
?>
	<?php foreach($test as $t): ?>
		<p> For Type ID: <?php echo $t['id'];?></p>
		<p> Ticket Type = <?php echo $t['type'];?></p>
		<p> Ticket Price =  $<?php echo $t['price'];?></p>
	<?php endforeach; ?>
	
	<form id = "testsubmit" name = "testsubmit" onsubmit="return validateForm()" action= "dbSubmit.php" method="post">
					<div class="login-row">
						<div class="col-md-12">
							&nbsp;<input type="text" id="field" placeholder="Type" name="type" autofocus>
							<span id="typemsg"></span>
							&nbsp;<input type="text" id="field" placeholder="1.00" name="price">
							<span id="pricemsg"></span>
							<div id = "message">
								
							</div>
						</div>
					</div>
					<br>
					<div>
						<form>
							<input type="submit" class ="btn" onclick="check(); event.preventDefault();" value="Submit">
						</form>
					</div>
				</form>