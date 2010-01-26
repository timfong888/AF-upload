<?php

    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');

?>

<style type="text/css">
	#tutorial a {
		font-size: 20px;
	}
	
	.sleft h1 {
		font-size: 38px;
		text-align: center;
	}
	
	.sleft h2 {
		font-size: 20px;
		text-align: center;
		
	}
	
	.sleft span {
		color: #0099ff;
	}
	
</style>
<div id="tutorial">
	<a href="javascript:void(0)" onclick="window.open('/user/chumbawumba','tutorial',
	'width=420, height=700, location=no, scrollbars=1, resizable=1')">See the types of accounts Tim can exchange with you!</a> 
</div>

<div id="singup">

  <?php $this->RenderBegin(); ?>

	<div class="sleft">
        <h1>You've been invited to receive <span>better</span> prospects </h1>
		<h2><span>Exchange</span> contacts and account information <span>easily</span> and <span>securely</span> by 
		accepting your <span>exclusive</span> invitation now</h2>
        <br />
        <table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td colspan="2">                        
                        	Work email address <br>
							<?php $this->txtEmail->RenderWithError(); ?> <br />
                            <!-- <input type="text" name="wea" class="Signup_input_1" value=""/> -->
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
										<!--<td><input type="text" name="cpass" class="Signup_input" value=""/></td> -->
										<td><?php $this->txtPassword->RenderWithError(); ?></td>
										<!--<td><input type="text" name="rpass" class="Signup_input" value=""/></td> -->
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
                                    Please review our <a href="http://www.allyforce.com/html/tos.htm">Terms of Service</a> and <a href="http://www.allyforce.com/html/privacy.htm">Privacy Policy</a>.
									<br /><br /><br />
									
                                    <!--<input type="checkbox" value="" name="agree"  class="Signup_check" />&nbsp;&nbsp;<strong>I understand and agree</strong>-->
									<div align="left"><?php $this->chkAgree->Render()?>&nbsp;&nbsp;<strong>I understand and agree</strong>
								<br />
								<br />
									<?php $this->btnCreate->Render(); ?>
									</div>
								<!--<input type="submit" value="create my account" name="create_account" class="Signup_submit"/> -->
												
						</td>
					</tr>
					
				</table>        	
	</div>
    
    <div class="sright">
            <div class="c_green">Make More Money</div>
            <br />
            Want more of the <b>right</b> contacts? 
            <br /><br />
			You can make <b>more money</b> with you own personal,
			secure referral network, right now!
            <br /><br />
            
            <div class="c_orange">Exchange Leads</div>
            <br />
            Do you know other sales reps who sell different products,
			but call on the <b>same</b> companies and contacts you do?
             <br /><br />
            Why not <b>exchange leads</b> simply and easily?
             <br /><br />
            
            <div class="c_blue">Build Allies</div>
            <br /> 
            Got other reps you can network with to get 
			even more contacts?  <br/> <br/>
			Do it easily with <b>allyforce!</b>
    </div>
    
  <?php $this->RenderEnd(); ?>

<?php 
	//require('bottom.inc.php');

?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 