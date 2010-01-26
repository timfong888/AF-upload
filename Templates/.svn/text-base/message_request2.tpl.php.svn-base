<?php require_once(__TEMPLATES__ . "/header3.tpl.php") ?>
<?php $this->RenderBegin(); ?>

	<div class="span-18 prepend-1 center">
		<?php $this->lblMessage->Render()?>
	</div>
	<div class="span-18 prepend-1 center">
		<?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?>
	</div>
	
	<div class="span-18 prepend-1">
		<?php 
			if(isset($this->pnlThreadDisplay))
			$this->pnlThreadDisplay->Render();
		?>
	</div>
	
	<div class="span-18 prepend-1">
	<?php
		if(!$this->objMessageArray) { ?>
		<div class="span-3 prepend-1"><strong>To:</strong></div>
		<div class="span-7 last">
			<a href="<?php echo __SUBDIRECTORY__ . '/AllyProfile.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>,<?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?>
		</div>
		<hr class="space"	/>
		
		<div class="span-3 prepend-1"><strong>Subject:</strong></div>
		<div class="span-11 last">
			<?php 
				if(isset($this->objAccount)){
					echo '<a href="#">';
					echo $this->objAccount->Name .  "?";
					echo '</a>';
				}

				?>&nbsp;&nbsp; Request from <?php echo $this->objUser->FullName; ?>

			<?php	} ?>
		</div>	
		<hr class="space"	/>
		
		<div class="span-2 prepend-1 append-15">
			<strong> 
			<?php 
				if($this->objMessageArray) 
					echo "Reply:";
				else	
					echo "Message(optional):"; 
					 
			?>		 
			</strong>
		</div>
		
		<div class="span-11 prepend-4 last">
			<?php $this->txtMessage->Render(); ?> 
		</div>
		
		<div class="span-11 prepend-1 last">
			<?php
				if($this->msgType == MessageType::Reply) {
			?>
					
			<strong>Company</strong>
					<?php
					if(isset($this->objAccount))
						echo $this->objAccount->Name;
					else
						echo $this->txtCompany->RenderWithError(); ?> 
						
				<?php 
				if(isset($this->lstContacts))
					$this->lstContacts->Render();
				else
					echo "No contacts available";
				?>  
					&nbsp;&nbsp;&nbsp; <strong>OR
					Offer New Contact</strong>&nbsp;&nbsp;&nbsp; <img border="0"
						align="absmiddle" alt="" src="images/tblue.gif" /> <img border="0"
						align="absmiddle" alt="" src="images/tred.gif" /> <br />
					<br />

		</div>
		<div class="span-19 prepend-1" id="message_request">
			<fieldset>	
			<legend>Give Contacts</legend>	
			<div class="span-9">
				<div class="span-2">Name</div>
			
				<div class="span-6 last"><?php $this->txtContactName->RenderWithError(); ?></div>
				<hr class="space" />				
				<div class="span-2">Email</div>
				<div class="span-6 last"><?php $this->txtContactEmail->RenderWithError(); ?></div>
			</div>
		
			<div class="span-9 last">				
				<div class="span-2">Title</div>
				<div class="span-6 last"><?php $this->txtContactTitle->RenderWithError(); ?></div>
				<hr class="space" />				
				<div class="span-2">Phone</div>
				<div class="span-6 last"><?php $this->txtContactPhone->RenderWithError(); ?></div>
			</div>	
		</div>	
		</fieldset>		
		<?php	} ?>			
			<!-- End Send contact requested -->
						
			<?php
			if(!$this->objMessageArray) {
			?>
			<hr class="space" />
			<h4><strong>Appended to bottom</strong></h4>
			<?php $this->lblBottom->Render(); ?>
				
			<?php
				}
			?>
		</div>
		<hr class="space" />
		<div class="span-18 push-4">
			<?php $this->btnGive->Render(); ?>
			<a href="#">Cancel</a>
		</div>
	</div>

</div><!-- /container-->
<?php $this->RenderEnd(); ?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</body>
</html>
