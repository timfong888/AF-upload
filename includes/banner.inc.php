<div class="span-18" id="banner">
	<div class="span-6">
	<img src="images/small_img.jpg" alt="allyforce logo" border="0" />								
	<span>
		<?php
			$objUser = unserialize($_SESSION['User']);
			echo $objUser->FullName;
		?>						
	</span>
	</div>
	<div class="span-9 last">
	<ul id="profileNav">
		<li><a href="profile.php">My Profile</a></li>
		<li><a href="billing.php">My Billing</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
</div>
