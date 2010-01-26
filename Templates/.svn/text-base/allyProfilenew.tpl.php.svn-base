<!-- this profile template is deprecating allyProfile.tpl.php -->
<?php require_once(__TEMPLATES__ . "/header2.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="span-22">
	<h3 class="blue"><?php echo $this->objAlly->FullName; ?>'s Profile</td></h3>
			
	<div class="span-4">
		<?php if($this->objAlly->UserDetail->Picture != ''){

			echo '<img src="' . __SUBDIRECTORY__ . '/Pictures/' . $this->objAlly->UserDetail->Picture . '" border="0" alt="" width="107px" height="125px"/>';

		}
		?> 
	</div>
	
	<div class="span-4">
		<label>Company</label> <br />
		<?php echo $this->objAlly->AccountIdObject->Name; ?> <br /><br />
		
		<label>Title</label> <br />
		<?php echo 'Title'; ?><br /><br />
		
		<label>Code Name</label> <br />
		<?php echo $this->objAlly->UserDetail->CodeName; ?></p>
	</div>
	
	<div class="span-10 last">
		<label>My Territory</label><br />
		<?php echo $this->objAlly->UserDetail->Territory; ?> <br /><br />

		<label>Company Pitch</label><br />
		<?php echo $this->objAlly->UserDetail->Solutions; ?></p>
	</div>	
</div>

<hr class="space" />
<hr class="span-22" />

<div class="span-20">
	<div class="span-2">

	</div>
	
	<div class="span-5">	
		<p class="green">Contacts You Gave to <?php echo $this->objAlly->FullName; ?></p>
	</div>
	
	<div class="span-1 border">
		<p class=" green"><?php echo($this->GivenContactNumber); ?></p><br /><br />
	</div>
	
	<div class="span-5">
		<p class="red">Contacts Received from <?php echo $this->objAlly->FullName; ?></p>
	</div>
	
	<div class="span-1 border">
		<p class="red"><?php print_r($this->ReceivedContactNumber); ?></p><br /><br />
	</div>
	
	<div class="span-5">
		<img src="images/see_mess.gif" border="0" alt=""
		align="absmiddle" style="float: left; margin-left:10px" />

		<p class="smess"><a href="threads.php?aid=<?php echo $this->objAlly->Id; ?>">See <br />
         Messages</a></p>
	</div>
	
</div>
<hr class="span-18" />
<hr class="space" />

<div class="span-6 border" id="request">
	<h3><strong class="red">Request Contacts</strong></h3>
                        <span class="red">Click</span> to request contacts
                        <br />
                        Stars = <strong>your</strong> targets!<br />
						
	<?php	
			foreach($this->AllyOfferArray as $AllyOffer){
	
			$objTarget = Target::LoadByUserIdAccountId($this->objUser->Id,$AllyOffer->Account->Id);
	
			if($objTarget)	
			echo '<img src="images/orange_star_big.gif" alt="" border="0" align="absbottom"  width="10" height="11"/>';
			else echo '<p style="width:10px; float:left">&nbsp;</p>';
						
			echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . __SUBDIRECTORY__ .'/message_request.php?aid=' . $this->objAlly->Id .'&acid=' . $AllyOffer->Account->Id . '&type=' . MessageType::Request .'">' . $AllyOffer->Account->Name .'</a><br /><br />';
	
			}
	?> 
</div>

<div class="prepend-1 span-6 border" id="offer">
	<h3><strong class="green">Give Contacts</strong></span></h3>
	<span>Click</span> to request contacts<br />
     Stars = your Ally's targets! <br /><br />
	<?php $this->txtAccount->RenderWithError(); ?><br />
	<?php $this->btnGive->Render(); ?><br /><br />
	
	<?php	
			foreach($this->AllyTargetArray as $AllyTarget){
	
				$objOffer = Offer::LoadByUserOwnerIdAccountId($this->objUser->Id,$AllyTarget->Account->Id);
	
				if($objOffer)	
					echo '<img src="images/green_star_big.gif" alt="" border="0" align="absbottom"  width="10" height="11"/>';
					else echo '<p style="width:10px; float:left">&nbsp;</p>';
					
					echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . __SUBDIRECTORY__ .'/message_send.php?aid=' . $this->objAlly->Id .'&acid=' . $AllyTarget->Account->Id . '&type=' . MessageType::Send . '">' . $AllyTarget->Account->Name . '</a><br /><br />';
						
			}
	?>
</div>

<div class="prepend-1 span-4" id="allies">
	<h4 class="orange"><strong><?php echo $this->objAlly->FullName ?>'s Allies</strong></h4>
	<?php $this->dtrAllyAllies->Render();?>
</div>

<?php $this->RenderEnd(); ?>
</div> <!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>

