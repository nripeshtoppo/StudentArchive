
<ul>
		<li><a href="index.php" class="first">Home</a></li>
	
		
		
				
		<?php
	
				if(!isset($_SESSION['unm']))
				{
					echo '<li><a href="employerregister.php">Registeration</a></li>';
				}
	
		?>
			            
				<li><a href="contact.php">Contact Us</a></li>

				
				
</ul>
		