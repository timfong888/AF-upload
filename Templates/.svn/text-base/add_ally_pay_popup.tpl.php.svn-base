<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>To Add Allies, Upgrade</title>
		
		<?php require_once('../includes/stylesheets-no-facebox.inc.php'); ?>
		
		<script type="text/javascript">
				function submitContactForm() {
  					$.post('invite_ally_popup.tpl.php', { field1: $('#field1').val() }, function(data){ $.facebox(data); })
 				}; 
		</script>
		
	</head>
		
	<body>
		<div class="span-11">
			<h3 class='red center'>To Add More Current Allies, You Need to Pay!</h3>
			<div class="push-1 span-9 quiet last">
				<p>You have<strong> hit the limit</strong> for using Allyforce for free.  
				If you want to add this rep to your Allies, <strong>you need to upgrade</strong>.</p>
 
				<p>You can always <strong>invite brand new sales reps</strong> who are not already members 
				of Allyforce, and you won't get charged. </p>
 
				<p>To be able to <strong>Add this Ally</strong> and start finding new deals right now, 
				click <strong>"Upgrade my Membership"</strong> -- for a limited time only $15/month for 3-5 
				additions from the network.  You can have more total allies by inviting 
				brand new sales reps to become members.  Just click <strong>"Invite New Reps."</strong></p>
			</div>
			
			<div class="span-11">
				<div class="push-1 span-4">
					<a href="billing_new.tpl.php"><button type="submit" class="positive">
        				<img src="../css/blueprint/plugins/buttons/icons/tick.png" alt=""/> 
        				Upgrade My Membership
    				</button></a>
				</div>
				
				<div class="push-1 span-4" onclick='submitContactForm(); return false;'>
					<button type="submit">
        				<img src="../css/blueprint/plugins/link-icons/icons/email.png" alt=""/> 
        				Invite New Reps
    				</button>
				</div>
				
			</div>
		</div> <!--main div-->
	</body>
</html>
