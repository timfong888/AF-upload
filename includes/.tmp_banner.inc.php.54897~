<div class="span-18" id="banner">
	<div class="span-6">
        <?php 
		   $objUser = unserialize($_SESSION['User']);
		   $username = $objUser->Username;
           $gravatarid3 = md5(strtolower($username)); 
		?>									
		<img src="http://www.gravatar.com/avatar?s=45&d=monsterid&gravatar_id=<?php echo $gravatarid3;?>">
							
	<span>
		<?php		
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
