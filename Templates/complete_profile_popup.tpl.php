		
		<?php require_once('includes/stylesheets-no-facebox.inc.php'); ?>

		<div class="span-10">
			<h2 class="center"><span class="red">Complete/Edit Your Profile!</span></h2>
			<div class='quiet push-1 span-9'>Ooops!  Looks like your profile
			hasn't been filled out, yet.  To fully use Allyforce, make sure you <strong>complete your profile</strong>
			</div>
			<div class="span-7 push-2" >
				<label>Last Name:</label>
				<br />
				<?php $_CONTROL->txtLastName->Render(); ?>
				<br /><br />
				<label>Title:</label>
				<br />
				<?php $_CONTROL->txtTitle->Render(); ?>
				<br /><br />
				<label>City:</label>
				<br />
		        <?php $_CONTROL->txtCity->Render(); ?>      
				<br /><br />
				<label class="span-7">Account where you HAVE Contacts:</label>
				<br />
				<?php $_CONTROL->txtOffer->Render(); ?>     
				<br /><br />
				<label class="span-7">Account where you WANT Contacts:</label>
				<br />
				<?php $_CONTROL->txtTarget->Render(); ?>     
				<br /><br />
	  			<?php $_CONTROL->btnCreate->Render(); ?> 
	  			<?php $_CONTROL->btnClose->Render(); ?>   
            </div>			
        </div>

