<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
		
?>
		<title>Allyforce: Signup for Invite</title>
		<link href="../css/screen.css" rel="stylesheet" type="text/css"  />
		
<?php $this->RenderBegin();?>	
	<body>
		<div class="container">
		<hr class="space" />
		<div class="span-6 prepend-1"><h1><span class="blue"><?php $this->lblUserName->Render(); ?></span></h1>
			<div class="box">
				<h3>Territory</h3>
				<p>Northern California, emerging companies with growing data center needs.  Focus in social
				networking, financial services, and e-...</p>
			</div>
			<div class="span-6">
				<h3>HAVES</h3>
				<span class="quiet">Accounts where I'd have contacts</span>
				<?php $this->dtgOffers->Render();?>
			</div>
			<table>
				
			</table>
			<hr class="space" />
			<h3>WANTS / PROSPECTS</h3>
			<span class="quiet">Accounts where I want contacts....</span>
			<?php $this->dtgTargets->Render();?>
			
		</div>
		<div class="span-12 prepend-2 last">
			<fieldset>
				<div class="center"><label><h3><span class="highlight">Accept invitation</span> to begin exchanging contacts NOW</h3></label></div>
				<div class="span-12">
					<div class="span-6">
						<label for="fname">First Name</label><br />
						<?php $this->txtFirstName->Render(); ?>
					</div>
					<div class="span-6 last">
						<label for="lname">Last Name</label><br />
						<?php $this->txtLastName->Render(); ?>
					</div>
				</div>
				
				<div class="span-10">
					<label for="email">Email Address</label><br />
				
					<?php $this->txtEmail->RenderWithError(); ?> <br />
				</div>
				
				<div class="span-12">
					<div class="span-6">
						<label for="password">Password</label><br />
						<?php $this->txtPassword->RenderWithError(); ?>
					</div>
					<div class="span-6 last">
						<label for="password">Retype Password</label><br />
						<?php $this->txtRetypePassword->RenderWithError(); ?>
					</div>
				</div>
				<hr class="space" /hr>
				<div class="span-11 box">
					Your plan is FREE for the BETA Trial Period.  You can cancel at any time.
					Please review our <a href="http://www.allyforce.com/html/tos.htm">Terms of Service</a>
					and <a href="http://www.allyforce.com/html/privacy.htm">Privacy Policy</a>.<br><br>
					<?php $this->chkAgree->Render()?>&nbsp;&nbsp;<strong>I understand and agree</strong>
					
				</div>
				<div class="span-3 prepend-8">
					<?php $this->btnCreate->Render(); ?>
				</div>
			</fieldset>
		<h3><span class="blue">Your Contacts are Secure</span></h3>
		<p>You only give contacts to those you know, trust, and will reciprocate.  You decide.</p>
		
		<h3><span class="blue">Your Prospect Lists Are Selectively Shared</span></h3>
		<p>Only those who are in your network can see which companies you are prospecting.
		If they are in your network, you want them to see, because that way they can share contacts
		with you.</p>
		
		<h3><span class="blue">Your Known Accounts Lists are Selectively Shared</span></h3>
		<p>Only those sales reps in your network know the account names where you have the contacts.  Your
		actual contacts remain secure until <strong>you</strong> decide to share them.</p>
		
		<h3><span class="blue">The More You Give, the More You Get</span></h3>
		<p>Sales reps who are invited into a network have the opportunity to expand
		their contacts by providing contacts to accounts they know and are willing to share.  Examples:
		<ul>
			<li>Existing installs</li>
			<li>Lost deals</li>
			<li>Unqualified prospects (but the right decision-makers)</li>
		</ul>
		</p>
		</div>
		
		</div> <!--container -->
<?php $this->RenderEnd();?>	
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
