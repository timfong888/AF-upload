<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
	require_once(__INCLUDES__ . "/stylesheets.inc.php");	
?>
		<title>Allyforce: Signup to Enable Reseller to Sell More for You Now</title>
		
<?php $this->RenderBegin();?>
<div class="container">
	<hr class="space" /r>
	
	<div class="span-11" id="explain">
		<h3 class="center">Give <span class="blue">Contacts</span>.  Get <span class="red">Sales</span>.</h3>
		<ul class="list">
		<li class="security">
			<h3 class="bottom prepend-1" style="font-weight: normal;">Exchange contacts <span class="blue">selectively and securely</span></h3>
				<p class="prepend-1">
					Selectively and securely give contact and account information to 
					your Resellers.
					<a href="#signup">Signup now! >></a>  
				</p>
		</li>
		<br />
		<li class="prospects">
			<h3 class="prepend-1 bottom" style="font-weight: normal;">Reseller finds <span class="red">new contacts</span> to sell for you!</h3>
				<p class="prepend-1">
					You have contacts.  Your Reseller's other Vendors have even more contacts.
					By giving, your Reseller can get more for him to sell your solution to.
					<a href="#signup">Signup now! >></a>
				</p>
		</li>
		<br />
		<li class="coverage">
			<h3 class="prepend-1 bottom" style="font-weight: normal;">Build pipeline and get meetings <span class="red">faster</span></h3>
				<p class="prepend-1">
					 Those contacts aren't making you money sitting in your CRM tool.  Trade them out
					 by giving them to your Reseller!
					 <a href="#signup">Signup now! >></a>
				</p>
		</li>
		<br />
		<li class="reseller_1">
			<h3 class="prepend-1 bottom" style="font-weight: normal;">Give Me (Your Reseller) <span class="red">Contacts</span></h3>
				<p class="prepend-1">
					 Deals that died.  Leads that you never followed up.  Unqualified prospects you talked to.
					 Let your Reseller use those to find new, fresh contacts and accounts for you!
					 <a href="#signup">Signup now! >></a>
				</p>
		</li>
		<br />
		<li class="reseller_2">
			<h3 class="prepend-1 bottom" style="font-weight: normal;">Reseller <span class="red">Sells Your Solution</span> to Other Vendor Contacts</h3>
				<p class="prepend-1">
					 With your contacts in hand, the Reseller goes to non-competing vendors and gets
					 their contacts.  Reseller sells your solution into those accounts.  Sweet!
					 <a href="#signup">Signup now! >></a>
				</p>
		</li>
		<br />
		<li class="reseller_3">
			<h3 class="prepend-1 bottom" style="font-weight: normal;">Reseller Turns Your Contacts into <span class="red">Money!</span> </h3>
				<p class="prepend-1">
					 To win, you need to find more contacts and more accounts...NOW!
					 Empower your Reseller to get into more accounts.  Give him the ammo
					 by signing up and giving contacts to him TODAY! <a href="#signup">Signup now! >></a>
				</p>
		</li>
		</ul>
	</div>	<!--explain-->
	
	<div class="span-11" id="howworks">
		<h3 class="center">How It Works</h3>
		<img src="../images/howreseller.gif">
	</div> <!--howworks-->
	
	<hr class="space span-22" />
	<hr class="space span-22" />
	<hr class="space span-22" />
	<div class="span-10" id="signup">
		<?php require_once(__INCLUDES__ . "/signup2.inc.php"); ?>
	</div> <!--signup-->
	
	<div class="span-7 prepend-3" id="mytargets">
		<h3 class="center blue">My Target Accounts</h3>
		<?php $this->dtgTargets->Render();?>
	</div>


	
</div> <!--container-->
<?php $this->RenderEnd();?>	
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
