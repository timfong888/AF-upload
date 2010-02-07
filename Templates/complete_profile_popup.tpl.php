		
		<?php require_once('includes/stylesheets-no-facebox.inc.php'); ?>

		<div class="complete_profile_popup">
			<h2 class="center"><span class="red">Complete/Edit Your Profile!</span></h2>
			<div >Ooops!  Looks like your profile
			hasn't been filled out, yet.  To fully use Allyforce, make sure you <strong>complete your profile</strong>
			</div>
			
			<div class="row">
				<span class="label">
					Last Name:
				</span>
				
				<span class="formfield">
					<?php $_CONTROL->txtLastName->Render(); ?>
				</span>
			</div>
			
			<div class="row">
				<span class="label">
					Title:
				</span>
				
				<span class="formfield">
					<?php $_CONTROL->txtTitle->Render(); ?>
				</span>
			</div>					

			<div class="row">
				<span class="label">
					City:
				</span>
				
				<span class="formfield">
					<?php $_CONTROL->txtCity->Render(); ?> 
				</span>
			</div>
				

			<div class="row">Account where you HAVE Contacts:</div>
			
			<span class="formfield"><?php $_CONTROL->txtOffer->Render(); ?></span>     

			<div class="row">Account where you WANT Contacts:</div>
			<span class="formfield"><?php $_CONTROL->txtTarget->Render(); ?>   </span>
			
  			<div class="row"><?php $_CONTROL->btnCreate->Render(); ?> </div>
  			<?php $_CONTROL->btnClose->Render(); ?>   
        </div> <!--complete_profile_popup-->

