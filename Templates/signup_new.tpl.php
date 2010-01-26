<?php

    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');

?>
<link href="css/style2.css" rel="stylesheet" type="text/css"  />	
<style type="text/css">
	#tutorial a span {
		font-size: 14px;
		color: #1E90FF;
	}	
	
</style>
  <?php $this->RenderBegin(); ?> <br>
		<div id="tutorial">
			<a href="javascript:void(0)" onclick="window.open('http://demo.allyforce.com/ultimate/player.html','tutorial',
			'width=500, height=400, location=no')">Four simple steps to find prospects with partners today!<span>(3 minute video)</span></a> 
		</div>
		</br></br>
	<div id="banner_signup">
		<a href="#main_signup" linkindex="8" set="yes">
			<img alt="signup" height="80" width="157" src="./images/signup_button.png"/>
		</a>

		<a href="tour.php" linkindex="8" set="yes">
			<img alt="tour" height="83" width="290" src="./images/signup/tour_button.png"/>
		</a>
	</div>
	<div id="main_signup">
	<div class="marketing_copy">
		<h1><span>Exchange</span> contacts with <span>sales partners:</span> <br> 
		You control <span>your</span> data - always</h1>

	
	<ul class="list">
		<li class="security">
			<h2 style="font-weight: normal;">Exchange contacts <span>selectively and securely</span></h2>
				<h3 style="font-weight: normal; color: rgb(68, 68, 68);">
					Selectively and securely give and receive contact and account information to 
					other partners you choose.
				<a style="color: rgb(126, 161, 3);" href="/tour/" linkindex="9" set="yes">More >></a>
				</h3>
		</li>
		
		<li class="prospects">
			<h2 style="font-weight: normal;">Find up-to-date <span>contact info</span> for decision-makers </h2>
				<h3 style="font-weight: normal; color: rgb(68, 68, 68);">
					Just as you know the latest contacts, so will your partners.  
					Exchange selectively and easily to get the latest contacts.
				<a style="color: rgb(126, 161, 3);" href="/tour/" linkindex="9" set="yes">More >></a>
				</h3>
		</li>
		
		<li class="accounts">
			<h2 style="font-weight: normal;">Get real <span>account</span> insights</h2>
				<h3 style="font-weight: normal; color: rgb(68, 68, 68);">
					Real sales reps in your territory can tell you what they know about an account, 
					from budget, to install-base, to internal politics.  Real insider-information
					you can't get anywhere else.
					<a style="color: rgb(126, 161, 3);" href="/tour/" linkindex="9" set="yes">More >></a>
				</h3>
		</li>
		
		<li class="partnership">
			<h2 style="font-weight: normal;">Easily leverage <span>partnerships</span></h2>
				<h3 style="font-weight: normal; color: rgb(68, 68, 68);">
					Make partnerships work, whether formal or informal, but easily enabling 
					communication, updates, and the exchange of actionable information out in the field.
					<a style="color: rgb(126, 161, 3);" href="/tour/" linkindex="9" set="yes">More >></a>
				</h3>
		</li>
		
		<li class="coverage">
			<h2 style="font-weight: normal;">Build pipeline and get meetings <span>faster</span></h2>
				<h3 style="font-weight: normal; color: rgb(68, 68, 68);">
					 Stop wasting time on bad information or cold-calling unresponsive targets.
					<a style="color: rgb(126, 161, 3);" href="/tour/" linkindex="9" set="yes">More >></a>
				</h3>
		</li>
	</div> <!--div.marketing_copy-->
		<table cellpadding="0" cellspacing="0" border="0">
			<th>Sign up for free BETA today!
			</th>
				
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td colspan="2">                        
                    Work email address <br>
					<?php $this->txtEmail->RenderWithError(); ?> <br />
                </td>
			</tr>
			<tr>
				<td>
					<br />
						<table cellpadding="0" cellspacing="0" border="0" width="98%">
					<tr>
						<td>First Name</td>
						<td>Last Name</td>						
					</tr>
					<tr>
						<td><?php $this->txtFirstName->Render(); ?></td>
						<td><?php $this->txtLastName->Render(); ?></td>						
					</tr>
                                    
                    <tr>
						<td>Create Password</td>
						<td>Retype Password</td>						
					</tr>
					<tr>
										
						<td><?php $this->txtPassword->RenderWithError(); ?></td>
										
						<td><?php $this->txtRetypePassword->RenderWithError(); ?></td>
																
					</tr>
                                    
		</table>
								
					</td>
					</tr>
					<tr>
						<td width="597" height="210" class="notify" valign="top">							
									<p align="left" style="padding-left:30px">
										<strong style="font-size:14px">Accept the agreement & create your allyforce account</strong></p>
									<br /><br />
									Your plan is FREE for the BETA Trial Period.  You can cancel at any time.
                                    <br /><br />
                                    Please review our <a href="/html/tos.htm">Terms of Service</a> and <a href="/html/privacy.htm">Privacy Policy</a>.
									<br /><br />
									<div align="left"><?php $this->chkAgree->Render()?>&nbsp;&nbsp;<strong>I understand and agree</strong>
										<br />
										<br />
										<?php $this->btnCreate->Render(); ?>
									</div>
												
						</td>
					</tr>
					
			</table> 

	</div>
	<br /><br />
	</div>
	
	<a name="main_signup" />

<?php $this->RenderEnd(); ?>


<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 

<?php 

	require('footer.inc.php');

?>
