<?php require_once(__TEMPLATES__ . "/header3.tpl.php") ?>
<?php $this->RenderBegin(); ?>
<div class="ctarget">
<table align="left" cellpadding="0" cellspacing="0" id="" width="100%">
	<tr>
		<td valign="top" class="mail"><a href="#">Compose</a> <br />
		<br />
		<a href="#">Inbox</a> <br />
		<br />
		<a href="#">Sent</a></td>
		<td>
		<table cellpadding="0" cellspacing="0" class="messsend">
		<tr><td colspan="3" align="center"><?php $this->lblMessage->Render()?></td></tr>
		<tr><td colspan="3" align="center"><?php if(isset($this->lblSubject)) $this->lblSubject->Render(); ?></td></tr>
		<tr>
			<td colspan=3>
			<div style="clear: both">
			<?php 
			if(isset($this->pnlThreadDisplay))
				$this->pnlThreadDisplay->Render();
			?>
			</div>
			</tr>
			<?php
			if(!$this->objMessageArray) {
				?>					
			<tr>
				<td align="right"><strong>To:</strong></td>
				<td><a
					href="<?php echo __SUBDIRECTORY__ . '/AllyProfile.php?aid=' . $this->objAlly->Id; ?>"><?php echo $this->objAlly->FullName ?></a>, <?php echo '&nbsp;' . $this->objAlly->AccountIdObject->Name; ?>
				</td>
			</tr>
			<tr>
				<td align="right"><strong>Subject:</strong></td>
				<td> <?php 
				if(isset($this->objAccount)){
					echo '<a href="#">';
					echo $this->objAccount->Name .  "!";
					echo '</a>';
				}	
				else
	
					/* echo $this->lblCompany->Render();*/
					echo $this->txtCompany->Text . "!";

				?>
				<?php echo '&nbsp;&nbsp;' . $this->objUser->FullName; ?> is Offering you a
				Contact</td>
			</tr>
			<?php	} ?>			
			<tr>
				<td colspan="2"><strong> 
				<?php 
				if($this->objMessageArray) 
					echo "Reply<br>Message:";
				else	
					echo "Message(optional):"; 
					 
				?>
				</strong></td>
			</tr>
			<tr>
				<td></td>
				<td><?php $this->txtMessage->Render(); ?> <!-- <textarea name="mesage"></textarea> -->
				</td>
			</tr>
			<?php
			if($this->msgType == MessageType::Send) {
			?>			
			<tr>
				<td><strong>Company</strong></td>
				<td><strong>
				<?php
				if(isset($this->objAccount))
					echo $this->objAccount->Name;
				else
					echo $this->txtCompany->RenderWithError();?></strong></td>
			</tr>
			<tr>
				<td colspan="2">
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
				&nbsp;<span style="font-size: 10px">or give a new contact</span></td>
			</tr>
			<tr>
				<td colspan="2"><strong>Contact Information</strong>
				&nbsp;&nbsp;&nbsp;&nbsp;This information goes only to allies you
				want . It is NOT made public EVER.</td>
			</tr>
			<tr>
				<td></td>
				<td style="padding-right: 0px">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="right">Name</td>
						<td><?php $this->txtContactName->RenderWithError(); ?> <!--  <input type="text" name="Name" /></td> -->
						
						
						<td align="right">Email</td>
						<td><?php $this->txtContactEmail->RenderWithError(); ?> <!-- <input type="text" name="Email" /></td> -->
					
					</tr>
					<tr>
						<td align="right">Title</td>
						<td><?php $this->txtContactTitle->RenderWithError(); ?> <!-- <input type="text" name="Title" /></td> -->
						
						
						<td align="right">Phone</td>
						<td><?php $this->txtContactPhone->RenderWithError(); ?> <!-- <input type="text" name="Phone" /></td> -->
					
					</tr>
				</table>

				</td>
			</tr>
			<?php if(!$this->objMessageArray){ ?>
			<tr>
				<td colspan="2"><br />
				<br />
				<strong>Appended to bottom</strong></td>
			</tr>

			<tr>
				<td></td>
				<td style="border: 1px solid #33CCFF"><?php $this->lblBottom->Render(); ?>
				<!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras sagittis dolor eget neque. Integer pede libero, vestibulum nec, malesuada nec, scelerisque in, elit. Aliquam erat volutpat. Morbi eu metus. Proin dolor. Etiam dictum nisl eu lacus. Ut elit eros, vulputate non, convallis ac, ultricies vulputate, nibh. -->

				</td>
			</tr>
			<?php		} ?>
			<?php	} ?>			
			<tr>
				<td colspan="2" align="right" style="padding-right: 0px"><?php $this->btnGive->Render(); ?>
				<!-- <input type="submit" align="right" value="Send" class="give"/> -->
				</td>
			</tr>
		</table>
		</td>

		<td align="left" valign="bottom" style="padding-bottom: 15px;">
		&nbsp;&nbsp;<a href="#">Cancel</a></td>
	</tr>
</table>

</div>
<!-- /ctarget-->
				<?php $this->RenderEnd(); ?>
</div>
<!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
