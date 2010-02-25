<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="container" id="dashboard">
  	<?php $select_home = "0" ;?>
	<?php $select_allies = "0" ;?>
	<?php $select_threads = "here" ;?>
	<?php $select_targets = "0" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	
<!-- <?php require('billing_notice.inc.php'); ?> -->
<?php

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

/* short term */
	$alliaverage='Below Average';
	$alliclass='belowdashboardbox';
  ?>
  	<div id="grid_background">

  		<div id="dashboard_rows">
  			<div class='row'>
  				<div class="dashlet <?echo $alliclass ?>">
					<h4># of allies added</h4>
					<div class="score"><?php  echo $this->addedAllies;?></div>
					<h5><?php _p($alliaverage); ?></h5>
				</div>
				
				<div class="dash_head" id = "recommendallies">
					<h2><a href="code_attendees.php">Find Allies with the Same Signup Code</a> <span>(click link now!)</span></h2>
					<h2><a href="allies.php">Invite Reps To Share Leads Now</a> <span>(click this link to invite)</span></h2>
					<!--
					<h2>Recommended Allies <span>(click name below to add Ally)</span></h2>
					<div class="accountcolumn1"><?php require ($billing_wrap)?>John S.</a></div>
					<div class="accountcolumn2"><?php require ($billing_wrap)?>David K.</a> </div>
					<div class="accountcolumn3"><?php require ($billing_wrap)?>Armand S.</a> </div>
					-->
				</div>
  			</div>
			
			<div class='row'>
				<div class="dashlet <? echo $trgclass ?>"> 				
					<h4># of targets added</h4> 
					<div class="score"><?php echo $this->addedTargets;?> </div>
					<h5><?php _p($trgaverage); ?> </h5>
				</div>
				
				<div class="dash_head" id = "addtargets"> 
					<h2><a href="targets.php">Add To Your Target List</a> <span>(click link now!)</span></h2>
					<h2>Add Suggested Targets <span>(click Account Below to Add Target)</span></h2>
					<?php $this->dtrTarget->Render(); ?>
				</div>
			</div>
			
			<div class='row'>
				<div class="dashlet <? echo $conclass ?>"> 
					<h4># of contacts given</h4> 
					<div class="score"><?php echo $this->givenContacts;?></div>
					<h5><?php _p($conaverage); ?> </h5>
				</div>
				
				<div class="dash_head" id = "offercontacts">
					<h2>Offer your contacts <span>(click if you know the Account)</span></h2>
					<?php $this->dtrOffer->Render(); ?>
				</div>
			</div>
			
			<div class='row'>					
				<div class="dashlet <? echo $reqclass ?>"> 
					<h4># requests made</h4>
					<div class="score"><?php echo $this->totalRequests;?></div>
					<h5><?php _p($reqaverage); ?></h5> 
				</div>

				<div class="dash_head" id = "getcontacts">
					<h2>Get contacts for yourself <span>(click to Request)</span></h2>
					<?php $this->dtrRecommended->Render(); ?>
				</div>				
			</div>
		</div> <!--dashboard_rows--> 

	   </div> <!--grid_background-->         
   <?php $this->RenderEnd(); ?> 
  </div><!-- /container-->

  <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>    
</body>
</html>
