<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Allyforce - Sign Up Page - Enter Code</title>
		<?php require_once('./includes/stylesheets.inc.php'); ?>
	 
	</head>

	<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
	?>
	<body>
		<div id="tutorial">
			<a href="javascript:void(0)" onclick="window.open('/user/chumbawumba','tutorial',
			'width=420, height=700, location=no, scrollbars=1, resizable=1')">See the types of accounts Tim can exchange with you!</a> 
		<?php $this->RenderBegin(); ?>
		</div>
	 
		<div class="container prepend-top">
		 
		
			<?php //require_once('header_external.tpl.php'); ?>	
			<div class='span-20' id='sign-up-header'>
				<h1>Find <strong>New Contacts</strong> and Opportunities Easily.</h1>
				<h1><strong>Exchange Leads</strong> With Reps You Trust.</h1>
			</div>
					
			<div class='prepend-2 span-8' id='sign-up-code'>
				<fieldset>
					<legend>Sign Up</legend>
					
					<Label>First Name:</Label><br />
					<?php $this->txtFirstName->Render(); ?>
					<br /><br />
					<label>Work Email:</label><br />
					<?php $this->txtEmail->RenderWithError(); ?>
					<br /><br />
					<label>Password:</label><br />
					<?php $this->txtPassword->RenderWithError(); ?>
					<br /><br />
					<label>Retype password:</label><br />			
					<?php $this->txtRetypePassword->RenderWithError(); ?>
					<br /><br />
					<label>Region:</label><br />
					<?php $this->txtDropDownListRegion->Render(); ?>
					<br /><br />
					<label>CODE:</label><br />
					<span class='quiet small'>Make sure you enter the right code exactly
					as given or you may have an account with fewer allies and functions!</span>
					<?php $this->txtSignupCode->Render(); ?>				
					<br /><br />
					<?php $this->chkAgree->Render()?>&nbsp;&nbsp;I agree to the Terms and Conditions.
					<br /><br />
					
					<?php $this->btnCreate->Render(); ?>
				</fieldset>
			</div><!-- sign up code -->
			
			<div class='prepend-1 span-6'>
				
				<p><strong>Allyforce</strong> allows you to find new contacts, accounts, and sales opportunities by 
				<strong>exchanging leads</strong> with non-competing sales-reps in your territory.</p>

				<p>By giving contacts you have that may have already bought or will 
				not buy from you with an Ally, you can <strong>uncover new opportunities</strong> faster.</p>

				<p>If you received a <strong>CODE</strong> from one of our events, it means <strong>other reps 
				like you</strong> from the same industry or targeting the same prospects will also begin to join.</p>

				<p><strong>Sign up today</strong> and start finding new deals right now!</p>
			</div>
				
			
		</div> <!--container-->
		 <?php $this->RenderEnd(); ?>
		 <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>	
