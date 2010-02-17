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
		<?php $this->lblMessage->Render()?><br />
	</div>

	<div class="subject_display">
		<?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?><br />
	</div>

	<div class="thread_display">
		<?php 
			if(isset($this->pnlThreadDisplay))
			$this->pnlThreadDisplay->Render();
		?>
	</div>

	<div id="message_thread">
		<?php if(!$this->objMessageArray) { ?>					

		<div class="row">
			<span class='label'>To:</span>
			<span class='value' <a href="<?php echo __SUBDIRECTORY__ . '/profile_activity.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>, <?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?></span>
		</div>

		
		<div class="row">
			<span class='label'>Subject:</span>
			<span class="value">
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
			</span>
		</div>
				
		<div class="reply">			
			<div class='row'>
				<?php 
					if($this->objMessageArray) 
						echo "<span class='label'>Reply<br>Message:</span>";
					else	
						echo "<span class='label'>Message(optional):</span>"; 					 
				?>
					
				<?php $this->txtMessage->Render(); ?>
			</div>
			
			<!-- if this is a send message type versus a reply -->
			<?php if($this->msgType == MessageType::Send) {?>			
				<div id="give_contact">	
					<span class='label'>Give Contact:</span>
	
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
					&nbsp;&nbsp;&nbsp; 
					<img border="0" align="absmiddle" alt="" src="images/tblue.gif" /> 
					<a class="popup" href="javascript:void(0)" onclick="window.open('salesforce_popup.php','targets','width=500, height=500, scrollbars=yes, screenX=600')">
						<img border="0" align="absmiddle" alt="" src="images/tred.gif"/><span class="quiet">(Click to see pop-up)</span>
					</a> <br />
					<br />
	
				<div class="row">
					<span class='label'>Name:</span>
					<span class='formfield'><?php $this->txtContactName->RenderWithError(); ?> </span>
				</div>
								
				<div class="row">
					<span class='label'>Email:</span>
					<span class='formfield'><?php $this->txtContactEmail->RenderWithError(); ?> </span>
				</div>
						
				<div class="row">
					<span class='label'>Title:</span>
					<span class='formfield'><?php $this->txtContactTitle->RenderWithError(); ?> </span>
				</div>
								
				<div class="row">
					<span class='label'>Phone:</span>
					<span class='formfield'><?php $this->txtContactPhone->RenderWithError(); ?></span>
				</div>
			
			</div> <!--give_contact -->	
	
		</div> <!--reply-->
					
		<div id="appended">						
			<?php if(!$this->objMessageArray){ ?>
	
			<h4>Appended to bottom</h4>
	
			<?php $this->lblBottom->Render(); ?>
			<?php		} ?>
		</div> <!--appended-->	
		
		<?php	} ?> <!--end of IF send or reply -->

		<div class='button'>
			<?php $this->btnGive->Render(); ?>
			<a href="#">Cancel</a>
		</div>	
		
	</div>
			
</div>  <!-- /container-->
<?php $this->RenderEnd(); ?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
