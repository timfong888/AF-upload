<!-- this file included through a require_once() statement -->
		
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