	<!--header_new.tpl.php -->
	<LINK REL="SHORTCUT ICON" HREF="http://" . __DOMAIN__ . "/favicon.ico" />
	<div id="header_new">
		<?php
			$objUser = unserialize($_SESSION['User']);
			$email = $objUser->Username;
            $gravatarid3 = md5(strtolower($email)); 
		?>
		<div id="logo">
			<img src="../images/logo.gif">
		</div>
		
		<div id="blueNav">
			<ul class='bluemenuNav'>
				<li> <a class='<?php echo $select_home ?>' href="home.php ">Home</a></li>
				<li> <a class='<?php echo $select_allies ?>' href="allies.php ">Allies</a></li>
				<li> <a class='<?php echo $select_targets ?>' href="targets.php ">Targets</a></li>
				<li> <a class='<?php echo $select_threads ?>' href="threads.php">Messages</a></li>
			</ul>
		</div>
		<div id="nav">
			<img src="http://www.gravatar.com/avatar?s=45&d=monsterid&gravatar_id=<?php echo $gravatarid3;?>">
			<ul class='nav'>
				<a href="profile.php"><?php echo $objUser->FullName; ?>'s Profile</a> |
				<a href="/logout">Logout</a> |
				<a href="Contact">Contact</a>
			</ul>
			<h5><a href="code_attendees.php">YOUR CODES: </a>
			    <a href="code_attendees.php">
			        <?php echo $objUser->Code ;?>
                </a>
            </h5>
		</div>
	</div> <!--header_new-->
									
		
