<?php require_once(__TEMPLATES__ . "/header3.tpl.php") ?>
<?php $this->RenderBegin(); ?>

	<div class="prepend-1 span-18">
		<?php $this->lblMessage->Render()?><br />
	</div>

	<div class="prepend-1 span-18 center">
		<?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?><br />
	</div>

	<div class="prepend-1 span-18">
		<?php 
			if(isset($this->pnlThreadDisplay))
			$this->pnlThreadDisplay->Render();
		?>
	</div>

	<div class="prepend-1 span-17">
		<?php if(!$this->objMessageArray) { ?>					

		<div class="span-3 bblue"><strong>To:</strong></div>
		<div class="span-10 last">
			<a href="<?php echo __SUBDIRECTORY__ . '/AllyProfile.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>, <?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?>
		</div>
		<hr class="space" />
		
		<div class="span-3"><strong>Subject:</strong></div>
		<div class="span-10 last">
			<?php 
			if(isset($this->objAccount)){
				echo '<a href="#">';
				echo $this->objAccount->Name .  "!";
				echo '</a>';
			}	
			else
	
			/* echo $this->lblCompany->Render();*/
			echo $this->txtCompany->Text . "!";

			?> 
					
			<?php echo '&nbsp;&nbsp;' . $this->objUser->FullName; ?> is Offering you a Contact
			<?php	} ?>
		</div>

		<hr class="space" />
				
		<strong><div class="span-3">			
			<?php 
				if($this->objMessageArray) 
					echo "Reply<br>Message:";
				else	
					echo "Message(optional):"; 					 
			?>
		</div></strong>	
		
		<div class="prepend-1 class-10 last" id="message_send">	
			<?php $this->txtMessage->Render(); ?>
		</div> 

	<div class="span-18 prepend-1" id="message_send_contacts">
	
			<?php
			if($this->msgType == MessageType::Send) {
			?>			
		<fieldset>
			<legend>Send Contact</legend>
				<strong>Company: </strong>
				<strong>
				<?php
				if(isset($this->objAccount))
					echo $this->objAccount->Name;
				else
					echo $this->txtCompany->RenderWithError();?></strong></td>

			<?php 
			if(isset($this->lstContacts))
				$this->lstContacts->Render();
			else
				echo "No contacts available";
			?>  
				&nbsp;&nbsp;&nbsp; <strong>OR
				Offer New Contact</strong>&nbsp;&nbsp;&nbsp; 
				<img border="0" align="absmiddle" alt="" src="images/tblue.gif" /> 
				<a class="popup" href="javascript:void(0)" onclick="window.open('salesforce_popup.php','targets','width=500, height=500, scrollbars=yes, screenX=600')">
					<img border="0" align="absmiddle" alt="" src="images/tred.gif"/><span class="quiet">(Click to see pop-up)</span>
				</a> <br />
				<br />

		<div class="span-2">Name:</div>
		<div class="span-6"><?php $this->txtContactName->RenderWithError(); ?> <br /></div>
						
		<div class="span-2">Email:</div>
		<div class="span-6 last"><?php $this->txtContactEmail->RenderWithError(); ?> <br /></div>

		<hr class="space" />
				
		<div class="span-2">Title:</div>
		<div class="span-6"> <?php $this->txtContactTitle->RenderWithError(); ?> <br /></div>
						
		<div class="span-2">Phone:</div>
		<div class="span-6 last"><?php $this->txtContactPhone->RenderWithError(); ?> <br /></div>
					
		<hr class="space" />
	
		<?php if(!$this->objMessageArray){ ?>

		<h4>Appended to bottom</h4>

		<?php $this->lblBottom->Render(); ?>
		<?php		} ?>
		<?php	} ?>			
		</fieldset>
		<?php $this->btnGive->Render(); ?>

		<a href="#">Cancel</a>

	</div> <!--message send contacts -->
	</div>
</div>  <!-- /container-->
<?php $this->RenderEnd(); ?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
