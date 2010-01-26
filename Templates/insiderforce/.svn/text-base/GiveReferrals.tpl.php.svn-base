<link href="../..//css/screen.css" rel="stylesheet" type="text/css"  />
<link href="../../css/plugins/buttons/screen.css" rel="stylesheet" type="text/css"  />

<?php $this->RenderBegin(); ?>
<div class="container">

<h2>Insider<span class="red">Force</span></h2>
<p>Give accounts and contact information for companies that meet the profile and earn referral dollars!</p><br />
	<div class="span-20 prepend-2" id="header"> 
		<div class="span-2 prepend-1" id="picture">
			<img src="../../Pictures/18-bigblueimage.jpg" class="top pull-1 left" width="107px" height="125px" alt="test">
		</div> <!--picture-->
		<div class="span-12 prepend-1 last" id="bounty_header">
			<div class="span-3"><strong>Average Bounty:</strong></div>
			<div class="span-6 prepend-1 last">$500</div><br />
			<hr class="space" />
			<div class="span-3"><strong>Bounty Terms:</strong></div>
			<div class="span-6 prepend-1 last">1% of closed contracted price</div><br />
			<hr class="space" />
			<div class="span-3"><strong>Solution Provider:</strong></div>
			<div class="span-6 prepend-1 last">ChumbaCorp</div>
		</div> 
	</div>
	<hr class="space" />
	<hr>
	
	<div class="span-22 prepend-2" id="body">
		<div class="span-6 colborder" id="profile">
			<h5>Profile of Prospects</h5>
			<span class="quiet"><p>Companies with high-growth potential, such as social networking, online gaming that have 
			infrastructure needs in areas of servers, storage, security, networking q/a, and 
			application performance.
			
			Also, companies with headcount growth but want to outsource IT (storage, email)
			such as biotech or service companies.</p></span>
			
			<h5>Titles/ Roles of Prospects</h5>
			<span class="quiet">Dir of Operations<br />
			Dir of IT<br />
			Dir of Networking<br />
			Dir of Infrastructure<br />
			Dir of Internet<br />
			Dir of Systems<br /></span>
		</div> <!--profile -->
		
		<div class="span-6  colborder" id="current_prospects">
			<h5>Current Prospects <span class="quiet small top">(Click to Give Referral)</span></h5>
			<?php	
			foreach($this->AllyTargetArray as $AllyTarget){
	
				$objOffer = Offer::LoadByUserOwnerIdAccountId($this->objUser->Id,$AllyTarget->Account->Id);
	
				if($objOffer)	
					echo '<img src="images/green_star_big.gif" alt="" border="0" align="absbottom"  width="10" height="11"/>';
					else echo '<p style="width:10px; float:left">&nbsp;</p>';
					
					echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . __SUBDIRECTORY__ .'/insiderforce/insider_referralthread.php?aid=' . $this->objAlly->Id .'&acid=' . $AllyTarget->Account->Id . '&type=' . MessageType::Send . '">' . $AllyTarget->Account->Name . '</a><br /><br />';
						
				}
			?>
		</div>
		
		<div class="span-5  last">
			<h5>Suggest Referral</h5>
			<!--<input class="span-5" type="text">-->
			<?php $this->txtAccount->RenderWithError(); ?><br />
			<?php $this->btnGive->Render(); ?>
			<!--<div class="prepend-1"><button type="submit" class="button positive">
	  				<img src="../../css/plugins/buttons/icons/tick.png" alt=""/> Give Referral
			</button>-->
		</div>
		
	</div> 
</div> <!--container-->
<?php $this->RenderEnd(); ?>