<?php require_once(__TEMPLATES__ . "/header8.tpl.php") ?>
<?php require('billing_notice.inc.php')?>

<?php $this->RenderBegin(); 
  
if($this->givenContacts>$this->conMidl){
	$conaverage='Above Average';
	$conclass='abovedashboardbox';
}
if($this->givenContacts==$this->conMidl){
	$conaverage='Average Perfomance';
	$conclass='dashboardbox';
}
if($this->givenContacts<$this->conMidl){
	$conaverage='Below Average';
	$conclass='belowdashboardbox';
}
if($this->addedTargets > $this->trgMidl){
	$trgaverage='Above Average';
	$trgclass='abovedashboardbox';
}
if($this->addedTargets == $this->trgMidl){
	$trgaverage='Average Perfomance';
	$trgclass='dashboardbox';
}
if($this->addedTargets < $this->trgMidl){
	$trgaverage='Below Average';
	$trgclass='belowdashboardbox';
}

if($this->addedAllies > $this->alliMidl){
	$alliaverage='Above Average';
	$alliclass='abovedashboardbox';
}
if($this->addedAllies == $this->alliMidl){
	$alliaverage='Average Perfomance';
	$alliclass='dashboardbox';
}
if($this->addedAllies < $this->alliMidl){
	$alliaverage='Below Average';
	$alliclass='belowdashboardbox';
}

	
if($this->totalRequests>$this->reqMidl){
	$reqaverage='Above Average';
	$reqclass='abovedashboardbox';
}
if($this->totalRequests==$this->reqMidl){
	$reqaverage='Average Perfomance';
	$reqclass='dashboardbox';
}
if($this->totalRequests<$this->reqMidl){
	$reqaverage='Below Average';
	$reqclass='belowdashboardbox';
}
  ?>
<div class="container">     
		<div class="notice span-19" id="hints">
			<strong>Add Prospects:</strong> It looks like you need to Add Prospects to your Account by clicking on the
			"Add Prospects" tab.
		</div>
		
		<div class="center span-24" id="dashboard">
			
			<div class="span-4 <? echo $conclass ?>"> 
			<label>#of contacts given 
			<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						This shows the total number of Contacts you have given to your Allies. <br><br>
						The rating compares the number of Contacts you have given versus the number of
						contacts that your Allies have given.	
						</span>	
				</a></label><br />
			<?php echo $this->givenContacts;?>
			<?php _p($conaverage); ?> 
			</div>

			<div class="span-4 <? echo $reqclass ?>"> 
			<label># of requests made
			<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						This shows the number of Requests for Contacts you have made.<br><br>
						You nurtured your Allyforce, now start asking for Contacts from 
						your Allies!  It's simple: just click on the account you want
						and Allyforce will take you to the page to make a simple request
						</span>	
				</a></label><br />
			<?php echo $this->totalRequests;?>
			<?php _p($reqaverage); ?> 
			</div>
			
			<div class="span-4 <? echo $trgclass ?>"> 
			 <label># of targets added 
			<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						This shows the number of Targets you have added.<br><br>  
						The more you have, the more
						Allyforce can help your Allies provide you contacts and introductions.<br><br>
						A Target is any company that you would like contacts to.	
						</span>	
				</a></label><br />
			<?php echo $this->addedTargets;?> 
			<?php _p($trgaverage); ?> 
			</div>
			<!--number of allies 
			<div class="span-4 <?echo $alliclass ?>">
				<label># of allies added 
			<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						This shows the number of Allies you have added.<br><br>
						Allies are other sales reps or consultants who are targeting similar companies.<br><br>
						Every time you meet someone who sells into your territory, make sure that
						you add them as your Ally.	
						</span>	
				</a></label><br />
				 <?php  echo $this->addedAllies;?>
			<?php _p($alliaverage); ?></div>
			--->
		</div> <!--dashboard-->
	     
	<div class="span-15" id="dashboard_left">
		<table id="homeright">
			<tr id = "offercontacts">
				<td colspan="4"> 
				Offer your contacts <span class="homeparen">(click if you know the Account)</span>
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
					<span class="tooltips_style">
					These are accounts targeted by your allies.<br><br>
					They are currently <u>not</u> on your Offer list.  But
					maybe you actually do know some people at the accounts listed.<br><br>
					If you do, just <b>click</b> and you will be able to send
					contacts to that ally.  Then you can ask for contacts in return!	
					</span>	
				</a> <br>
			</td></tr> 
			<tr><td>
			<?php $this->dtrOffer->Render(); ?>
			</td></tr>
			<tr class="dashboard_spacer"><td></td></tr>
			<tr id = "addtargets"> <td colspan="4">
				Add these to your Targets <span class="homeparen">(click to Add Target)</span>
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
					<span class="tooltips_style">
					Your network of allies know people at these accounts</br></br>
					However, you currently do not have them on your Target list.<br><br>
					By clicking on them, you make a Request and also add them to your
					Target list so that you can find more contacts in the future!	
					</span>	
				</a> <br>
			</td></tr>
			<tr><td>
				<?php $this->dtrTarget->Render(); ?>
			</td></tr>
			<tr class="dashboard_spacer"><td></td></tr>
			<tr id = "recommendallies"><td colspan="4">
				Recommended Allies <span class="homeparen">(click to add Ally)</span>
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
					<span class="tooltips_style">
					Click on an Ally name to request to share leads.<br><br>
					This feature requires a paid subscription past the beta period.<br><br>
					If this is blank, it may mean you don't have enough activity or Offers for us to
					match you with the right Allies.	
					</span>	
				</a>
			</td></tr>
			
			<tr><td> </td>
				<td><?php require ($billing_wrap)?>John S.</a></td>
				<td><?php require ($billing_wrap)?>David K.</a> </td>
				<td><?php require ($billing_wrap)?>Armand S.</a> </td>
			</tr>	
			<tr class="dashboard_spacer"><td></td></tr>
			<tr id = "getcontacts"><td colspan="4">
				Get contacts for yourself <span class="homeparen">(click to Request)</span>
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
					<span class="tooltips_style">
					Click an account name to request a contact.
					<br><br>
					These appear because they are on your Target list.  By adding more accounts to
					your Target list, allyforce can continue to identify which of your Allies
					can help you get into those accounts!	
					</span>	
				</a>
			</td></tr>
			<tr><td>
				<?php $this->dtrRecommended->Render(); ?>
			</td></tr>	
		</table>
		
       </div> <!-- dashboard left -->
	   
	   <div class="span-8" id="dashboard-right">
	   	Recent Activities (last 7 activities)
	   </div>
	          
   <?php $this->RenderEnd(); ?> 
  </div><!-- /container-->

  <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>    
</body>
</html>
