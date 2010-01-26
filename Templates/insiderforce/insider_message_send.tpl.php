<link href="../../css/screen.css" rel="stylesheet" type="text/css"  />
<link href="../../css/plugins/buttons/screen.css" rel="stylesheet" type="text/css"  />
<link href="../../css/style.css" rel="stylesheet" type="text/css"  />

<?php $this->RenderBegin(); ?>
<div class="container">
	<div class="container" id="header">
		<div class="span-12">
			<h2>InsiderForce</h2>
			<p><span class="quiet">Where you get paid for anonymously providing referral contacts and company information
			to solution providers.</span></p>
			<hr class= "space" />
		</div>
		
		<div class="span-5 prepend-4 bottom last">
			<a href="Login">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="About">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="FAQ">FAQ</a>
			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="../logout.php">Logout</a>
		</div>
	</div> <!--header-->
			<div class="span-15 prepend-5">
				<?php $this->lblMessage->Render()?> 
			</div>
			<div class="span-15 prepend-5 center">

				
				<?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?>
				<hr class= "space" />
				<hr class="span-15 prepend-5" />
				
				<?php 
					if(isset($this->pnlThreadDisplay))
					$this->pnlThreadDisplay->Render();
				?> 
			</div>


			<?php
			if(!$this->objMessageArray) { ?>					
			<div class="span-15 prepend-5" id="thread_head">			
				<div class = "span-2"><strong>To:</strong></div>
				<div class="span-8 last" ><a href="<?php echo __SUBDIRECTORY__ . '/AllyProfile.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>, <?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?></div>
			
				<hr class="space">
				
				<div class= "span-2"><strong>Subject: </strong></div>
				
				<div class="span-8 last">
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
				</div>
			</div> <!--thread_head --->
			
			<?php } ?>			
			
			<hr class="space" />
			
			<div class="prepend-5 span-15">
				<?php 
					if($this->objMessageArray) 
						echo "Reply Message:";
					else	
						echo "Message(optional):"; 					 
				?>
				<?php $this->txtMessage->Render(); ?> 
			</div>
			<hr class="space" />
			
			<?php
			if($this->msgType == MessageType::Send) {
			?>			

			<div class="span-15 prepend-5 bold" id="contacts">
				Company

				<?php
				if(isset($this->objAccount))
					echo $this->objAccount->Name;
				else
					echo $this->txtCompany->RenderWithError();?> <br />

			<?php 
			if(isset($this->lstContacts))
				$this->lstContacts->Render();
			else
				echo "No contacts available";
			?>  
				&nbsp;&nbsp;&nbsp; <strong>OR
				Offer New Contact</strong>&nbsp;&nbsp;&nbsp; <img border="0"
					align="absmiddle" alt="" src="../images/tblue.gif" /> <img border="0"
					align="absmiddle" alt="" src="../images/tred.gif" /> <br />
				<br />
				&nbsp;<span style="font-size: 10px">or give a new contact
				<p>This information goes only to allies you want . It is NOT made public EVER.</p>
				</div>
				
			<div class="span-15 prepend-5">
				<fieldset>
					<legend>Contact Information</legend>
					Name<br />
						<?php $this->txtContactName->RenderWithError(); ?><br />
						
					Email<br />
						<?php $this->txtContactEmail->RenderWithError(); ?> <br />
					
					Title<br />
					<?php $this->txtContactTitle->RenderWithError(); ?> <br />
						
					Phone<br />
					<?php $this->txtContactPhone->RenderWithError(); ?> <br />
				</fieldset>
				<?php $this->btnGive->Render(); ?>
				
			</div>
		<!---
			<?php if(!$this->objMessageArray){ ?>
			<?php $this->lblBottom->Render(); ?>
		--->
		
			<?php } ?>
			<?php	} ?>			


</div>
<!-- /ctarget-->
				<?php $this->RenderEnd(); ?>
</div>
<!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
