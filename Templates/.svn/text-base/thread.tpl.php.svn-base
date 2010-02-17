<div class="messagethread">

	<div class="author_gravatar">
		<?php
			$email = $_CONTROL->objMessage->FromUser->Username;
			$gravatar = md5(strtolower($email));
			$id = $_CONTROL->objMessage->FromUser->Id;
		?>
			<a href="profile_activity.php?aid=<?php echo $id ?>">
				<img src="http://www.gravatar.com/avatar?s=45&d=monsterid&gravatar_id=<?php echo $gravatar;?>">
			</a>	
	</div>
	
	<div class="author_info">
		<?php 
			echo '<b><a href="profile_activity.php?aid=$id">'. $_CONTROL->objMessage->FromUser->FullName . '</b></a><br/>';
			echo '<b>'. $_CONTROL->objMessage->FromUser->AccountIdObject->Name . '</b>';
			echo "<br>"; 
		?>
		<div class="date">
			<?php	
				echo $_CONTROL->objMessage->DateTime->__toString("hh:mm z MMM D YY ");
			?>
		</div>
	
	</div>
	
	<div class="message_body">
		<?php
			echo $_CONTROL->objMessage->Body;
		?>
	</div>
</div>
