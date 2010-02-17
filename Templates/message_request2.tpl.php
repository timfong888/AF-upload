<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="container" id="threads">
  	<?php $select_home = "0" ;?>
	<?php $select_allies = "0" ;?>
	<?php $select_threads = "here" ;?>
	<?php $select_targets = "0" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	
	<div class="message_display">
		<?php $this->lblMessage->Render()?>
	</div>
	
	<div class="subject_display">
		<?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?>
	</div>
	
	<div class="thread_display">
		<?php 
			if(isset($this->pnlThreadDisplay))
			$this->pnlThreadDisplay->Render();
		?>
	</div>
	
	<div id="message_thread">
		<?php
			if(!$this->objMessageArray) { ?>
			<div class="row">
				<span class='label'>To:</span>
				<span class='value'><a href="<?php echo __SUBDIRECTORY__ . '/profile_activity.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>,<?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?></span>
			</div>
			
		<div class="row">
			<span class='label'>Subject:</span>
		    <span class='value'><?php 
				if(isset($this->objAccount)){
					echo '<a href="#">';
					echo $this->objAccount->Name .  "?";
					echo '</a>';
				}
				?>&nbsp;&nbsp; Request from <?php echo $this->objUser->FullName; ?>
			</span>
		</div>
		<?php	} ?>	<!--end of IF messageArray-->
		
		<div class="reply">
			<?php 
				if($this->objMessageArray) 
					echo "<label>Reply:</label>";
				else	
					echo "<label>Message(optional):</label>"; 
					 
			?>	
			<?php $this->txtMessage->Render(); ?>
				 		
			<div id="give_contact">
				<h2>Give Contacts 
			<?php if($this->msgType == MessageType::Reply) {?>
						
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
				</h2>
					
					<div class="row">
						<span class='label'>Name</span>
						<span class="formfield"><?php $this->txtContactName->RenderWithError(); ?></span>
					</div>
				
					<div class="row">
						<span class='label'>Email</span>
						<span class="formfield"><?php $this->txtContactEmail->RenderWithError(); ?></span>
					</div>
		
					<div class="row">
						<span class='label'>Title</span>
						<span class="formfield"><?php $this->txtContactTitle->RenderWithError(); ?></span>
					</div>
					
					<div class="row">
						<span class='label'>Phone</span>
						<span class="formfield"><?php $this->txtContactPhone->RenderWithError(); ?></span>
					</div>
									
			</div>	<!--give_contacts-->
			
			<div class="button">
				<?php $this->btnGive->Render(); ?>
				<a href="#">Cancel</a>
			</div>
	</div> <!--reply-->
	<?php	} ?>			
						
			<?php
			if(!$this->objMessageArray) {
			?>

			<h4><strong>Appended to bottom</strong></h4>
			<?php $this->lblBottom->Render(); ?>
				
			<?php
				}
			?>

	</div>

</div><!-- /container-->
<?php $this->RenderEnd(); ?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</body>
</html>
