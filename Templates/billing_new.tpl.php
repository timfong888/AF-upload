<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<?php require_once('../includes/stylesheets-no-tablecloth.inc.php'); ?>	
	 
<!-- note: change the root directory to correspond to CONFIGURATION.INC.PHP files -->

<title>Profile Activity - Admin - Jeremy S.</title>
</head>
<body>
<div class="container prepend-top">
	
		<?php require_once('header_new.tpl.php'); ?>
		<div class='span-9 push-1'>
			<fieldset>
				<legend>Credit Card</legend>
				
					<table>
						<tr>
							<td class='right-align'><label>First Name:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>
						<tr>
							<td class='right-align'><label>Last Name:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>
						<tr>	
							<td class='right-align'><label>Card Type:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>	
						<tr>	
							<td class='right-align'><label>Credit Card Number:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>
						<tr>	
							<td class='right-align'><label>Expiration Date:</label></td>
							<td class='cc-input'>
								<select id="cc_expMonth" class="" name="cc_expMonth">
								<option value="" selected="selected">Month</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								</select>
								
								<select id="cc_expYear" class="" name="cc_expYear">
									<option value="" selected="selected">Year</option>
									<option value="2009">2009</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
								</select>
							</td>
						</tr>	
						<tr>	
							<td class='right-align'><label>CSC:</label></td>
							<td class='cc-input'><input  class='span-2' type='text'></input></td>
						</tr>
						<tr>	
							<td class='right-align'><label>Billing Address:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>
						
						<tr>	
							<td class='right-align'><label>Billing Address 2:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>
						
						<tr>	
							<td class='right-align'><label>City:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>	
						
						<tr>
							<td class='right-align'><label>State:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>	
						<tr>
							<td class='right-align'><label>Zip Code:</label></td>
							<td class='cc-input'><input type='text'></input></td>
						</tr>	
					</table>
					
					<div class='push-3 span-5'><button type='submit' class='span-3 positive'>
						<img src="../css/blueprint/plugins/buttons/icons/tick.png"> Save
					</button></div>

			</fieldset>		
		</div>
		
		<div class='span-9 push-1'>
			<button type='submit' class='span-3 positive moveup5px'>
				<img src='../css/blueprint/plugins/buttons/icons/tick.png'>Novice
			</button>
			<h3 class='quiet'>Free 1-2 Existing Allies</h3><br />
			<p>Invite as many new users to be allies.  You can add 1-2 existing Allyforce users
			to become allies for free.</p>
			
			<hr class='span-7'></hr>
			<button type='submit' class='span-3 moveup5px'>
				Basic
			</button>
			<h3 class='quiet'>$15/mo 3-5 Existing Allies </h3><br />
			<p>You can continue to <strong>invite as many brand new</strong> Users for free.  And you can
			invite up to 5 <strong>already existing</strong> Allyforce members to become your Allies for
			unlimited contact sharing.</p>
			
			<hr class='span-7'></hr>
			<button type='submit' class='span-3 moveup5px'>
				Advanced
			</button>
			<h3 class='quiet'>$39/mo 6-15 Existing Allies </h3><br />
			<p>You've become an expert networker and can add up to 15 <strong>existing</strong> members
			to become Allies.</p>
			
			<hr class='span-7'></hr>
			<button type='submit' class='span-3 moveup5px'>
				Manager
			</button>
			<h3 class='quiet'>$10/mo per Managed Rep </h3><br />
			<p>Sales Manager and want to have Reporting Capabilities to make sure you are
			effectively sharing leads with partners?  This is for you!</p>			
		</div>
		
	</div>
</body>
</html>