<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Add Ally Pop Up</title>
		
			<?php require_once('../includes/stylesheets-no-facebox.inc.php'); ?>
			
			<script type="text/javascript">
				function submitContactForm() {
  					$.post('successful_invite_ally_popup.tpl.php', { field1: $('#field1').val() }, function(data){ $.facebox(data); })
 				}; 
			</script>
	</head>
	<body>
		
		<form name="input" action="successful_invite_ally_popup.tpl.php" method="post">
		<div class="span-7 push-1">
			<h3 class="red">You Need to Invite a New Ally!</h3>
			<p class='quiet'>It looks like you need to <strong>invite more</strong> new people
			to Allyforce in order to <strong>Request Contacts</strong> or <strong>Add Allies</strong>.</p>
			
			<p class='quiet'>It's easy.  <strong>Any sales rep</strong> -- in your territory,
			at your company, outside of your territory -- who sells into
			similar companies <strong>qualifies</strong>.  Add more, you can <strong>request more contacts</strong>!</p>
			
			<p><strong>And you'll make quota faster!</strong></p>
			
			<div class="span-7">

				<strong>First Name:</strong><br />
				<input type='text' value='' class='span-6'></text>
				<br />
				<strong>Work Email:</strong><br />
				<input type='text' value='' class='span-6'></text>
			</div>
			
			<div class='span-4 push-3'>

				<button class='bblue' onclick="submitContactForm(); return false;">
	  				Invite Ally
				</button>
			</div>			
		</div>
		</form> 
	</body>
</html>
