<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<?php require_once('../includes/stylesheets.inc.php'); ?>	
	 
<!-- note: change the root directory to correspond to CONFIGURATION.INC.PHP files -->

<title>Profile Activity - Admin - Jeremy S.</title>
</head>
<body>
<div class="container prepend-top">
	
	<?php require_once('header_new.tpl.php'); ?>
	
	<div class='span-19 box byellow' id='accept_invite'>
		<h3 class='red'>You Have Been Invited to Become an Ally!</h3>
		<p>You can <strong>Accept</strong> or <strong>Ignore</strong> the invitation to become an Ally.  Once you
		become an Ally, you can <strong>Request Contacts</strong> from that Ally to find new opportunities
		and <strong>hit your quota faster</strong>!<br />
		<br />
		
		<div class='push-2 span-8'>
			<a href="profile_activity.tpl.php">Robin S.</a> &nbsp;&nbsp; &nbsp; 
			<strong><a href="Accept Invite" class="accept_invite">Accept Invite</a></strong>&nbsp;&nbsp; &nbsp; 
			<a class='quiet' href="Ignore">Ignore</a>
		</div>
	
	</div> 
		
	<div class="span-6" id="left-margin">
		<div class="span-6" id='profile'>
			<fieldset>
			<legend>Jeremy S. Profile </legend>
			<div class="span-5">
				<div class="span-3">
				
				<!--convert the ally email into a gravatar md5 hash-->	
				<?php $gravatarid1 = md5( strtolower('tim1@allyforce.com'));?>
				<?php $gravatarid2 = md5( strtolower('tim2@allyforce.com'));?>
				<?php $gravatarid3 = md5( strtolower('tim3@allyforce.com'));?>
									
				<img src="http://www.gravatar.com/avatar?d=monsterid&gravatar_id=<?php echo $gravatarid1;?>">
	
				</div>
			
				<div class="span-2 last">
					<a href="edit_profile_popup.tpl.php" title="Edit Profile" rel="facebox">Edit Profile</a><br />
				</div>
			</div>
			<div class="span-5">
				<hr class="space"></hr>
			</div>
			<div class="span-2 quiet" align="right">
			Company:<br /><br />
			
			Title:<br /><br />
			
			Territory:<br /><br />
	
			City:
			</div> <!--labels-->
			
			<div class="span-3 last">
				<strong>Coverity</strong><br /><br />
				
				<strong>Territory Manager</strong><br /><br />
				
				<strong>West</strong><br /><br />
				
				<strong>Santa Clara</strong>
			</div> <!--field values-->		
		</fieldset>
		</div> <!--fieldset profile-->
	
		<div class="span-6">
			<fieldset>
				<legend>Allies (3)</legend>
				<div class='span-5 top admin_link' align='right'>
					<a href="invite_ally_popup.tpl.php" rel='facebox'>Invite Allies</a>
				</div>
				<p class='small'>A <span class='green loud'>GREEN score</span> means you have given more to the 
				ally than you've received.  <span class='red'>RED means</span>
				you have not given more than you gave, <span class='red'>so you owe contacts</span>!</p>
				<div class="span-5">
					<div class="span-1" id="image_column">
						<img src="http://www.gravatar.com/avatar?size=30&d=monsterid&gravatar_id=<?php echo $gravatarid1;?>">
					</div>
				
					<div class="span-2" id="name-co-column">
						<a href="profile_activity.tpl.php">Albert S.</a><br />
						<b>Oracle</b>
					</div>
				
					<div class="span-1 push-1 last positive-give-score-column">
						+5
					</div>
					
				</div>
				
				<div class="span-5">
					<div class="span-1" id="image_column">
						<img src="http://www.gravatar.com/avatar?size=30&d=monsterid&gravatar_id=<?php echo $gravatarid2;?>">
					</div>
				
					<div class="span-2" id="name-co-column">
						<a href="profile_activity.tpl.php">Chris W.</a><br />
						<b>Sybase</b>
					</div>
				
					<div class="span-1 push-1 last positive-give-score-column">
						+2
					</div>
					
				</div>
				
				<div class="span-5">
					<div class="span-1" id="image_column">
						<img src="http://www.gravatar.com/avatar?size=30&d=monsterid&gravatar_id=<?php echo $gravatarid3;?>">
					</div>
				
					<div class="span-2" id="name-co-column">
						<a href="profile_activity.tpl.php">Nick T.</a><br />
						<b>Kickfire</b>
					</div>
				
					<div class="span-1 push-1 last negative-give-score-column">
						-1
					</div>
				</div>
							
			</fieldset>
		</div>
	</div> <!--left-margin-->
	
	<div class="span-8" id="feed">

		<fieldset>
			<legend>Activity Feed</legend>
			
			<div class="span-7 " id="message_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid3 ?>">&nbsp;<a href="profile_activity.tpl.php">Nick T.</a> and you have exchanged <strong>Messages:</strong><br /><br />
				<div class="span-6 push-1" id="messages_feed_list">
					<a href="threads.php">Visa</a><br /><br />
					
					<a href="threads.php">Varian, Inc.</a>
				</div>
				<hr class="span-7"></hr>
			</div><!--message_feed-->
			
			<div class="span-7 " id="target_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid2 ?>">&nbsp;<a href="profile_activity.tpl.php">Chris W.</a> recently added <strong>Targets:</strong><br /><br />
				<div class="span-6 push-1" id="target_feed_list">
					<a href="account_profile.tpl.php">Ross Stores</a><br /><br />
					
					<a href="account_profile.tpl.php">Cybersource</a>
				</div>
				<hr class="span-7"></hr>
			</div><!--target_feed-->
			
			<div class="span-7" id="ally_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid1 ?>">&nbsp;<a href="profile_activity.tpl.php">Albert S.</a> is now an <strong>Ally</strong> of:<br /><br />
				<div class="span-6 push-1" id="target_feed_list">
					<a href="profile_activity.tpl.php">Albert Y. (Oracle)</a><br />
										
				</div> <!--target-feed-list-->
				
				<hr class="span-7"></hr>

			</div><!--ally_feed-->

			<div class="span-7" id="receive_contact_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid2 ?>">&nbsp;
				 <a href="profile_activity.tpl.php">Chris W.</a> can  <strong>Offer</strong> up:<br /><br />
				<div class="span-6 push-1" id="receive_contact_feed_list">
					<a href="account_popup.tpl.php" title="Account Info Popup" rel="facebox">Gymboree</a>
					
				</div> <!--receive_contact_feed_list-->
				
				<hr class="span-7"></hr>
			</div><!--receive_contact_feed-->			

			<div class="span-7" id="send_contact_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid1 ?>">&nbsp;
				   <a href="profile_activity.tpl.php">Albert S.</a> sent a <strong>Contact</strong> at:<br /><br />
				<div class="span-6 push-1" id="send_contact_feed_list">
					<a href="account_profile.tpl.php">Varian</a> to <a href="Chris W. (Sybase)">Chris W. (Sybase)</a>
					
				</div> <!--send_contact_feed_list-->
				
				<hr class="span-7"></hr>
			</div><!--send_contact_feed-->

			<div class="span-7" id="offer_feed">
				<img src="http://www.gravatar.com/avatar?size=15&d=monsterid&gravatar_id=<?php echo $gravatarid3 ?>">&nbsp;
				   <a href="profile_activity.tpl.php">Nick T.</a> can <strong>Offer</strong> up:<br /><br />
				<div class="span-6 push-1" id="send_contact_feed_list">
					<a href="account_popup_request.tpl.php" rel="facebox">Varian</a>
					
				</div> <!--send_contact_feed_list-->
				
				<hr class="span-7"></hr>
			</div><!--send_contact_feed-->
			
			<a href="More>>">More>></a>			
		</fieldset>
	</div> <!--feed-->
	
	<div class="span-7 last" id="right-profile">
		
		<div class="span-6 last" id="recommend_requests">
			<fieldset>
				<legend id="red">Get Contacts Right Now</legend>
				<p class='small moveup5px'>We recommend you get these contacts now because they are currently on your
				Target List and an Ally knows someone here.</p>
				<a href="message_request.php" title="Account Info Popup" rel="facebox">Visa</a><br /><br />
				
				<a href="message_request.php" title="Account Info Popup" rel="facebox">URS</a><br /><br />
				
				<a href="message_request.php" title="Account Info Popup" rel="facebox">Raley's</a><br /><br />
				
				<a href="message_request.php" title="Account Info Popup" rel="facebox">Cypress Semiconductor</a><br /><br />
				
				<a href="message_request.php" title="Account Info Popup" rel="facebox">Gilead</a>
				
			</fieldset>
		</div>
		
		<div class="span-6 last" id="want-contacts">
			<fieldset>
				<legend id="green">Suggested Targets</legend>
				<div class='span-5 top admin_link' align='right'>
					<a href="targets.php"'>Edit Your Targets</a>
				</div>
				<a href="account_popup_give.tpl.php" title="Account Info Popup" rel="facebox">The Gap</a><br /><br />
				
				<a href="account_popup_give.tpl.php" title="Account Info Popup" rel="facebox">Rearden Commerce</a><br /><br />
				
				<a href="account_popup_give.tpl.php" title="Account Info Popup" rel="facebox">Bank of the West</a><br /><br />
				
				<a href="account_popup_give.tpl.php" title="Account Info Popup" rel="facebox">Silicon Valley Bank</a><br /><br />
				
				<a href="account_popup_give.tpl.php" title="Account Info Popup" rel="facebox">Altera</a>
				
			</fieldset>
		</div>
		
		<div class="span-6 last" id="has-contacts">
			<fieldset>
				<legend id="red">Give Contacts to Allies</legend>
				<div class='span-5 top admin_link' align='right'>
					<a href="offers.php">Edit Your Offers</a>
				</div>
				<p class='small'>Be the first to get new leads from your Allies by feeding them contacts
				you may know at these accounts.</p>
				<a href="account_popup_give.tpl.php" rel="facebox">Visa</a><br /><br />
				
				<a href="account_popup_give.tpl.php" rel="facebox">Costco</a><br /><br />
				
				<a href="account_popup_give.tpl.php" rel="facebox">Borel Bank</a><br /><br />
				
				<a href="account_popup_give.tpl.php" rel="facebox">Juniper Networks</a><br /><br />
				
				<a href="account_popup_give.tpl.php" rel="facebox">AMD</a>
			</fieldset>
		</div>
		
	</div>
		
</div>
</body>
</html>