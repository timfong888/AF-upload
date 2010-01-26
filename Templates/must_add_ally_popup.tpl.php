<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Add Ally Pop Up</title>
		
		<?php require_once('../includes/stylesheets-no-facebox.inc.php'); ?>
			
			<script type="text/javascript">
				function submitContactForm() {
  					$.post('addally_submit_popup.htm', { field1: $('#field1').val() }, function(data){ $.facebox(data); })
 				}; 
			</script>
	</head>
	<body>
		
		<form name="input" action="addally_submit_popup.htm" method="post">
		<div class="span-7 push-1">
			<h3 class="red">Add Mike N. as an Ally?</h3>
			
			<p class='quiet'>In order to <strong>Request or Give a Contact</strong>, you need to add Mike as an Ally by
			<strong>pressing</strong> the "Invite Ally" button below.</p>
			
			<p class='quiet'>Mike will need to <strong>accept your invitation</strong>.</p>
			
			<p class='quiet'>If he does, you'll be able to share contacts and account information
			easily and securely.</p>
			
			<p><strong>And you'll make quota faster!</strong></p>
			
			<div class='span-4 push-3'>

				<button class='bblue' onclick="submitContactForm(); return false;">
	  				Invite Ally
				</button>
			</div>			
		</div>
		</form> 
	</body>
</html>
