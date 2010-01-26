<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
		
?>

<link href="../css/public_style.css" rel="stylesheet" type="text/css"/>
<style>
	table.public_table col#Request {
		text-align: center;
	}
	
	div#public_username {
		float:left;
		width: 280px;
	}
	
	label {
	}
	
	div#public_request_contact {
		margin-left: 300px;
		margin-right: 250px;

	}
	
	div#public_description {
		float: right;
		width: 230px;
		padding: 20px;
		font-family: Arial, Helvetica, sans-serif;
		border-style: dotted;
		border-width: 2px;
	}
	
	div#public_description h2 {
		background-color: #F0F8FF;
		padding: 15px;
		text-align: center;
	}
	
</style>
<?php $this->RenderBegin();?>
<script type="text/javascript">

	function radioSelect(ctrlName) {
		
		var elements = document.getElementsByTagName('INPUT');
		for(var i = 0;i < elements.length; i++) {	
			if((elements[i].type == 'radio' || elements[i].type == 'checkbox') && (elements[i].name!= ctrlName)) 
				elements[i].checked = false;	
		}		
	}
	
	function checkSelect(ctrlName) {
		
		var elements = document.getElementsByTagName('INPUT');
		for(var i = 0;i < elements.length; i++) {	
			if((elements[i].type == 'radio')) 
				elements[i].checked = false;	
		}		
	}
</script>

<div id="public_container">
	<div id="public_username">
		<h1><?php $this->lblUserName->Render(); ?></h1>
	<h2>Offered Accounts</h2>
	<?php $this->dtgOffers->Render();?>
			
	<h2>Target Accounts</h2>
	<?php $this->dtgTargets->Render();?>
	
	</div>

<div id="public_description">
	<h2>What is this Page?</h2>
	<p>This page shows you the accounts the rep is both able to offer and is targeting.</p>
	<h3>Who are the sales reps?</h3>
	<p>These are real reps who use Allyforce to exhange contact and account information with other sales reps they know and trust</p>
	<h3>What happens if I click on one of these links?</h3>
	<p>Clicking on one of the links will take you to either an account profile or a sales rep profile.</p>
	<h3>How do I find out who is the sales rep?</h3>
	<p>You should see a description of their offering in the profile
	Once you submit your request, the receiving sales rep can accept or decline.
	Once he accepts, you'll know who is on the other end</p>
	<h3>Do I have to give up any contact information at these accounts?</h3>
	<p>No, you never have to give any contact information until you choose to.</p>
</div> <!--public_description-->

<!--this is a single include file which is called when writing this part -->
<div id="public_request_contact">
	<form name =  "public_request_contact_form">
			<h2>Request a Contact from a real sales rep for FREE!</h2>
			<label for="first_name">First Name</label><br>
			<?php $this->txtFirstName->Render();?><br>
			<label for="last_name">Last Name</label><br>
			<?php $this->txtLastName->Render();?><br>
			<label for="email">Email*</label><br>
			<?php $this->txtEMail->RenderWithError();?><br>
			<label for="company">Company Name</label><br>
			<?php $this->txtCompany->Render();?><br>
			<label for="message">Message</label></br>
			<?php $this->wrtMessage->Render();?><br><br>
			<br>
			<?php $this->btnRequest->Render();?><br>
	</form>
</div>
	
<?php $this->RenderEnd();?>	
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
