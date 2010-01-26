<link href="../../css/style.css" rel="stylesheet" type="text/css"  />
<link href="../../css/screen.css" rel="stylesheet" type="text/css"  />
<link href="../../css/plugins/buttons/screen.css" rel="stylesheet" type="text/css"  />

<?php $this->RenderBegin(); ?>
<div class="container">

	  
	<div class="span-20 prepend-2" id="header">
		<div class="span-8"><h2>Insider<span class="red">Force</span></h2>
		<p><span class="quiet">Where you get paid for anonymously providing referral contacts and company information
		to solution providers.</span></p></div>
		
		<div class="span-10" id="header_right">
			<ul class="nav prepend-3">
				<li><a href="About">About</a>|</li>
				<li><a href="Login">Login</a>|</li>
				<li><a href="Signup">Signup</a></li>
			</ul>
		</div>
	</div>
	
	<div class="span-9 prepend-2" id="left">
		<div class="span-3"><strong>Invite is from:</strong></div> 

		<div class="prepend-1 span-5 last"><?php $this->lblUserName->Render(); ?></div>
		<hr class="space" />
		
		<div class="span-3"><strong>Solution Provider:</strong></div>
		<div class="prepend-1 span-5 last">ChumbaCorp</div>
		<hr class="space" />
		
		<div class="span-3"><strong>Bounty Terms:</strong></div>
		<div class="prepend-1 span-5 last">1% of final contracted price</div>
		<hr class="space" />
		
		<div class="span-3"><strong>Average Bounty:</strong></div>
		<div class="prepend-1 span-5 last">$450</div>
		<hr class="space" />
		
		<div class="span-3"><strong>Territory:</strong><br> <span class="small"><a href="different territory?">different territory?</a></span></div>
		<div class="prepend-1 span-5 last">Northern California, from San Jose to Sacramento</div>
		<hr class="space" />
		
		<div class="span-3"><strong>Target Companies</strong></div>
		<div class="prepend-1 span-5 last"><ul><li>social networking sites</li>
		<li>growing/emerging financial services</li>
		<li>growing data-centers</li>
		<li>growing head-count</li></ul></div>
		<hr class="space" />
		<div class="span-3"><strong>Target Title/Roles</strong></div>
		<div class="prepend-1 span-5 last"><ul><li>Dir of IT</li>
		<li>Operations</li>
		<li>Networking</li>
		<li>Infrastructure</li>
		<li>Internet Services</li></ul></div>		
		
	</div> <!--left-->
	
	<div class="span-8 prepend-3" id="right">
		<form action="insider_signup.php">
			<fieldset>
				<legend>Register to Provide Referrals</legend>
				
				<label for="fname">First Name</label><br />
				<?php $this->txtFirstName->Render(); ?><br />
				<hr class="space" />
				
				<label for="lname">Last Name</label><br />
				<?php $this->txtLastName->Render(); ?><br />
				<hr class="space" />
						
				<label for="email">Email</label> <br />
				<?php $this->txtEMail->RenderWithError();?> <br />
				<hr class="space" />
				<!--<input type="text" class="text span-7" id="dummy1" name="email"><br /> -->
				
				<label>Password</label><br />
				<?php $this->txtPassword->RenderWithError(); ?><br />
				<hr class="space" />
				<!--<input type="text" class="text span-7" id="dummy1" name="dummy1"><br /> -->
				
				<label>Retype Password</label><br />
				<?php $this->txtRetypePassword->RenderWithError(); ?><br />
				<!--<input type="text" class="text span-7" id="dummy1" name="dummy1"> -->
				
				<div align="left" class="box">
					I agree to the Terms and Conditions.<br />
					<?php $this->chkAgree->Render()?>&nbsp;&nbsp;<strong>I understand and agree</strong>
				</div>
				<?php $this->btnCreate->Render(); ?>

				<!--<div class="prepend-4"><button type="submit" class="button positive">
	  				<img src="../../css/plugins/buttons/icons/tick.png" alt=""/> Register
				</button></div>-->
			</fieldset>
		</form>
	</div>	
</div> <!--container-->

  <?php $this->RenderEnd(); ?>

